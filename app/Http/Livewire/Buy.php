<?php

namespace App\Http\Livewire;

use App\Models\Resource;
use App\Services\WalletService;
use Livewire\Component;

class Buy extends Component
{
    public $showModal = false;
    public $currencies = [];

    public $asset_name = '';
    public $asset_quantity = '';
    public $currency_id = '';
    public $currency_quantity;

    protected $rules = [
        'asset_name' => 'required|string',
        'asset_quantity' => 'required|numeric|min:0|not_in:0',
        'currency_id' => 'required|exists:resources,id',
        'currency_quantity' => 'required|numeric|min:0',
    ];

    protected $listeners = ['valueSearch'];

    public function valueSearch($resource)
    {
        $this->asset_name = $resource;
    }

    public function render()
    {
        return view('livewire.buy');
    }

    public function updatedShowModal()
    {
        if($this->showModal)
        {
            $this->currencies = Resource::whereType('fiat currency')->orderBy('name')->get();
        }
    }

    public function submit(WalletService $walletService)
    {
        $this->validate();

        $currency = Resource::find($this->currency_id);

        $walletService->buy($this->asset_name, $this->asset_quantity, $currency, $this->currency_quantity);

        $this->emit('investment-activity');

        $this->showModal = false;
    }
}
