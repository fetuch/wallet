<?php

namespace App\Http\Livewire\Investments;

use App\Models\Resource;
use Livewire\Component;

class BuyCurrency extends Component
{
    public $currencies = [];
    public $currency_quantity;
    public $currency = '';

    protected $rules = [
        'currency' => 'required|exists:resources,id',
        'currency_quantity' => 'required|numeric|min:0|not_in:0',
    ];

    public function mount()
    {
        $this->currencies = Resource::whereType('fiat currency')->orderBy('name')->get();
    }

    public function submit()
    {
        $this->validate();

        $currency = $this->currencies->firstWhere('id', $this->currency);

        $this->emitUp('asset-selected', [
            'description' => $this->currency_quantity . ' ' . $currency->name,
            'currency' => $currency,
            'quantity' => $this->currency_quantity,
        ]);
    }

    public function render()
    {
        return view('livewire.investments.buy-currency');
    }
}
