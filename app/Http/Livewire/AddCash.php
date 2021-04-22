<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Transaction;
use Livewire\Component;

class AddCash extends Component
{
    public $showModal;
    public $assets = [];
    public $asset = '';
    public $quantity = null;

    protected $rules = [
        'quantity' => 'required|numeric|min:0|not_in:0',
        'asset' => 'required|exists:assets,id',
    ];

    public function mount()
    {
        $this->showModal = false;

        $this->assets = Asset::whereType('fiat currency')->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.add-cash');
    }

    public function submit()
    {
        $this->validate();

        $asset = $this->assets->firstWhere('id', $this->asset);

        Transaction::create([
            'type' => 'ADD',
            'user_id' => auth()->id(),
            'quantity' => $this->quantity,
            'asset_name' => $asset->name,
            'assetable_id' => $asset->id,
            'assetable_type' => get_class($asset),
        ]);

        $this->quantity = null;
        $this->asset = '';
        $this->showModal = false;

        $this->emit('CashAdded');

        $this->emit('notify', [
            'title' => 'Transaction successful',
            'subtitle' => 'Everything goes right',
        ]);
    }
}
