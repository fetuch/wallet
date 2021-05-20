<?php

namespace App\Http\Livewire\Investments;

use App\Models\Resource;
use Livewire\Component;

class BuyPreciousMetal extends Component
{
    public $precious_metals = [];
    public $precious_metal_quantity;
    public $precious_metal = '';
    public $name = '';

    protected $rules = [
        'name' => 'required|string',
        'precious_metal' => 'required|exists:resources,id',
        'precious_metal_quantity' => 'required|numeric|min:0|not_in:0',
    ];

    public function mount()
    {
        $this->precious_metals = Resource::whereType('precious metal')->orderBy('name')->get();
    }

    public function submit()
    {
        $this->validate();

        $metal = $this->precious_metals->firstWhere('id', $this->precious_metal);

        $this->emitUp('asset-selected', [
            'description' => $this->precious_metal_quantity . ' ' . $this->name . " (" . $metal->name .")",
            'name' => $this->name,
            'precious_metal' => $metal,
            'quantity' => $this->precious_metal_quantity,
        ]);
    }

    public function render()
    {
        return view('livewire.investments.buy-precious-metal');
    }
}
