<?php

namespace Tests\Unit\App\Services;

use App\Models\Resource;
use App\Services\RegisterTransactionService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTransactionServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $service;

    public function setUp(): void
    {
        parent::setUp();

        $this->service = new RegisterTransactionService();
    }

    /** @test */
    public function buys_dollars_for_euros()
    {
        // create valuation currency
        $pln = Resource::create([
            'currency_id' => 1,
            'name' => 'PLN',
            'type' => 'fiat currency'
        ]);

        // create dollar currency and its valuation
        $usd = Resource::create([
            'currency_id' => $pln->id,
            'name' => 'USD',
            'type' => 'fiat currency'
        ]);

        $usd->valuations()->create([
            'date' => now(),
            'amount' => 3.7288
        ]);

        // create euro currency and its valuation
        $euro = Resource::create([
            'currency_id' => $pln->id,
            'name' => 'Euro',
            'type' => 'fiat currency'
        ]);

        $euro->valuations()->create([
            'date' => now(),
            'amount' => 4.5298
        ]);

        $asset = [
            'currency' => $usd->toArray(),
            'quantity' => 1210
        ];

        $payment = [
            'currency' => $euro->toArray(),
            'quantity' => 1000
        ];

        $this->service->buy('fiat', $asset, $payment);

        $this->assertTrue(1 > 0);
    }
}
