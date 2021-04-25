<?php

namespace App\Http\Livewire;

use App\Models\Resource;
use App\Services\WalletService;
use Livewire\Component;

class AddCurrency extends Component
{
    public $showModal = false;
    public $currencies = [];
    public $currency = '';
    public $quantity = null;

    protected $rules = [
        'quantity' => 'required|numeric|min:0|not_in:0',
        'currency' => 'required|exists:resources,id',
    ];

    public function mount()
    {
        $this->currencies = Resource::whereType('fiat currency')->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.add-currency');
    }

    public function submit(WalletService $walletService)
    {
        $this->validate();

        $resource = $this->currencies->firstWhere('id', $this->currency);

        $walletService->addCurrency($resource, $this->quantity);

        $this->emit('CurrencyAdded');

        //$this->emit('notify', [
        //    'title' => 'You have added ' . $this->quantity . ' ' . $asset->name . ' to your wallet',
        //    'subtitle' => 'Everything goes right',
        //]);

        $this->clear();
    }

    public function clear()
    {
        $this->quantity = null;
        $this->currency = '';
        $this->showModal = false;
    }
}
