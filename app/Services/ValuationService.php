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
        // if resource is connected to asset take that asset latest valuation
        // return valuation in users default currency b

        return 5;
    }
}
