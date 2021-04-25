<?php

namespace App\Http\Livewire;

use App\Services\WalletService;
use Livewire\Component;

class AccountOverview extends Component
{
    public $balance = 0;

    protected $listeners = ['CurrencyAdded' => 'computeBalance'];

    public function mount(WalletService $walletService)
    {
        $this->balance = $walletService->computeBalance();
    }

    public function render()
    {
        return view('livewire.account-overview');
    }

    public function computeBalance(WalletService $walletService)
    {
        $this->balance = $walletService->computeBalance();
    }
}
