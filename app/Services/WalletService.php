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
            ]);
        }

        activity('investments')
            ->causedBy(auth()->user())
            ->performedOn($asset)
            ->log('You have added ' . $quantity . ' ' . $asset->name . ' to your wallet');
    }

    public function buy($assetName, $assetQuantity, $currency, $currencyQuantity)
    {
        if ($asset= $this->user->getAssetByName($assetName))
        {
            $asset->update([
                'quantity' => $asset->quantity += $assetQuantity
            ]);
        } else {
            $asset = Asset::create([
                'name' => $assetName,
                'user_id' => $this->user->id,
                'quantity' => $assetQuantity,
            ]);
        }

        if ($userCurrency= $this->user->currencies()->where('resource_id', $currency->id)->first())
        {
            $userCurrency->update([
                'quantity' => $userCurrency->quantity -= $currencyQuantity
            ]);
        } else {
            Asset::create([
                'name' => $currency->name,
                'user_id' => $this->user->id,
                'resource_id' => $currency->id,
                'quantity' => - $currencyQuantity,
            ]);
        }

        activity('investments')
            ->causedBy(auth()->user())
            ->performedOn($asset)
            ->log('You have bought ' . $assetQuantity . ' ' . $assetName . ' for ' . $currencyQuantity . ' ' . $currency->name);
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
