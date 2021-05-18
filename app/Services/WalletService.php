<?php

namespace App\Services;

use App\Models\Asset;
use App\Models\Resource;

class WalletService
{
    private $user;
    private $valuationService;

    /**
     * WalletService constructor.
     *
     * @param \App\Services\ValuationService $valuationService
     */
    public function __construct(ValuationService $valuationService)
    {
        $this->user = auth()->user();
        $this->valuationService = $valuationService;
    }

    /**
     * @param \App\Models\Resource $resource
     * @param $quantity
     */
    public function addCurrency(Resource $resource, $quantity)
    {
        if ($asset = $this->user->getAssetByName($resource->name))
        {
            $asset->update([
                'quantity' => $asset->quantity += $quantity
            ]);
        } else {
            $asset = Asset::create([
                'name' => $resource->name,
                'user_id' => $this->user->id,
                'resource_id' => $resource->id,
                'quantity' => $quantity,
                'unit_price' => $resource->valuations()->latest('date')->first()->amount,
            ]);
        }

        activity('investments')
            ->causedBy(auth()->user())
            ->performedOn($asset)
            ->log('You have added ' . number_format($quantity, 2, ',', ' ') . ' ' . $asset->name . ' to your wallet');
    }

    public function computeValuation()
    {
        $valuation = 0;

        foreach($this->user->assets as $asset)
        {
            $valuation += $asset->quantity * $this->valuationService->valuate($asset);
        }

        return $valuation;
    }
}
