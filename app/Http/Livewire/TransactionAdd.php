<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Transaction;
use Livewire\Component;

class TransactionAdd extends Component
{
    public $quantity;
    public $assets = [];
    public $asset = '';

    protected $rules = [
        'quantity' => 'required|numeric',
        'asset' => 'required|exists:assets,id',
    ];

    public function mount()
    {
        $this->assets = Asset::whereType('fiat currency')->orderBy('name')->get();
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

        $this->emit('hideTransactionOverlay');

        $this->emit('notify', [
            'title' => 'Transaction successful',
            'subtitle' => 'Everything goes right',
        ]);
    }

    public function render()
    {
        return view('livewire.transaction-add');
    }
}
