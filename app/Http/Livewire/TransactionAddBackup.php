<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use Livewire\Component;

class TransactionAddBackup extends Component
{
    public $quantity;
    public $searchedAsset;
    public $asset;

    protected $listeners = ['assetSelected'];

    protected $rules = [
        'quantity' => 'required|numeric',
        'asset' => 'required|string|min:5',
    ];

    public function assetSelected(Asset $asset)
    {
        $this->asset = $asset;
    }

    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.transaction-add');
    }
}
