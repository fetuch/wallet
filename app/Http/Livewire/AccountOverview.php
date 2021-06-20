<?php

namespace App\Http\Livewire;

use App\Services\WalletService;
use Livewire\Component;

class AccountOverview extends Component
{
    public $valuation = 0;
    public $assets = 0;

    protected $listeners = ['investment-activity' => 'computeValuation'];

    public function mount(WalletService $walletService)
    {
        $this->valuation = $walletService->computeValuation();
        $this->assets = auth()->user()->assets()->positive()->count();
    }

    public function render()
    {
        return view('livewire.account-overview');
    }

    public function computeValuation(WalletService $walletService)
    {
        $this->valuation = $walletService->computeValuation();
    }

    public function computeAssetCount()
    {
        $this->assets = auth()->user()->assets()->positive()->count();
    }
}
