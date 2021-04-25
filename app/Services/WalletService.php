<?php

namespace App\Services;

use App\Events\CurrencyAdded;
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
        if ($asset= $this->user->getAssetByName($resource->name))
        {
            $asset->update([
                'quantity' => $resource->quantity += $quantity
            ]);
        } else {
            $asset = Asset::create([
                'name' => $resource->name,
                'user_id' => $this->user->id,
                'resourced_id' => $resource->id,
                'quantity' => $quantity,
            ]);
        }

        activity()
            ->causedBy(auth()->user())
            ->performedOn($asset)
            ->log('You have added ' . $quantity . ' ' . $asset->name . ' to your wallet');
    }

    public function computeValuation()
    {
        $balance = 0;

        foreach($this->user->assets as $asset)
        {
            $balance += $this->valuationService->valuate($asset);
        }

        return $balance;
    }
}
