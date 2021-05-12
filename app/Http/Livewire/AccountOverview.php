<?php

namespace App\Http\Livewire;

use App\Services\WalletService;
use Livewire\Component;

class AccountOverview extends Component
{
    public $valuation = 0;

    protected $listeners = ['investment-activity' => 'computeValuation'];

    public function mount(WalletService $walletService)
    {
        $this->valuation = $walletService->computeValuation();
    }

    public function render()
    {
        return view('livewire.account-overview');
    }

    public function computeValuation(WalletService $walletService)
    {
        $this->valuation = $walletService->computeValuation();
    }
}
