<?php

namespace App\Http\Livewire\Investments;

use App\Services\RegisterTransactionService;
use Livewire\Component;

class RegisterBuyTransaction extends Component
{
    public $steps = [
        [
            'description' => 'type'
        ],
        [
            'description' => 'asset'
        ],
        [
            'description' => 'payment'
        ],
        [
            'description' => 'summary'
        ],
    ];
    public $currentStep = 0;
    public $assetTypes = [
        'cryptocurrency' => [
            'name' => 'crypto currencies, based on blockchain',
            'description' => 'BTC, ETH, Luna...'
        ],
        'fiat' => [
            'name' => 'fiat currencies',
            'description' => 'USD, EURO, PLN...'
        ],
        'precious metals' => [
            'name' => 'precious metals',
            'description' => 'gold & silver'
        ],
        'stock' => [
            'name' => 'company shares',
            'description' => 'listed on exchanges and more'
        ],
        'other' => [
            'name' => 'other assets'
        ]
    ];
    public $selectedType = '';
    public $asset = [];
    public $payment = [];
    public $summary = [
        'type' => '',
        'asset' => '',
        'payment' => ''
    ];

    protected $listeners = [
        'asset-selected' => 'assetSelected',
        'payment-selected' => 'paymentSelected',
        'summary-accepted' => 'summaryAccepted',
        'nextStep'
    ];

    public function assetSelected($payload)
    {
        $this->asset = $payload;

        $this->summary['asset'] = $payload['description'];

        $this->nextStep();
    }

    public function paymentSelected($payload)
    {
        $this->payment = $payload;

        $this->summary['payment'] = $payload['description'];

        $this->nextStep();
    }

    public function summaryAccepted(RegisterTransactionService $service)
    {
        try {
            $service->buy($this->selectedType, $this->asset, $this->payment);
        } catch (\Exception $e) {
            info($e);
        }

        $this->redirect(route('investments.assets.index'));
    }

    public function nextStep()
    {
        $this->currentStep += 1;
    }

    public function setStep($step)
    {
        if($this->currentStep > $step) $this->currentStep = $step;

        if($this->currentStep === 0)
        {
            $this->selectedType = '';
        }
    }

    public function updatedSelectedType()
    {
        $this->summary['type'] = $this->assetTypes[$this->selectedType]['name'];

        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.investments.register-buy-transaction');
    }
}
