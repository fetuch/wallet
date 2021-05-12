<?php

namespace App\Services;

use App\Models\Asset;

class ValuationService
{
    /**
     * @param \App\Models\Asset $asset
     * @return int
     */
    public function valuate(Asset $asset)
    {
        $userCurrencyValuation = 0;
        // if asset is connected to resource take that resource latest valuation
        // return valuation in users default currency
        if($asset->resource)
        {
            $valuation = optional($asset->resource->valuations()->latest('date')->first())->amount;

            $assetCurrency = $asset->resource->currency;

            $userCurrencyValuation = $valuation * optional($assetCurrency->valuations()->latest('date')->first())->amount;
        }

        return $userCurrencyValuation;
    }
}
