<?php

namespace App\Http\Controllers\Investments;

use App\Http\Controllers\Controller;
use App\Models\Asset;

class AssetsController extends Controller
{
    public function index()
    {
        $assets = Asset::where('user_id', auth()->id())
            ->with('resource')
            ->get();

        // TODO:
        foreach($assets as $asset)
        {
            if( $asset->resource) {
                $asset->valuation = $asset->resource->valuations()->latest('date')->first();
            } else {
                $asset->valuation = $asset->valuations()->latest('date')->first();
            }
        }

        return view('investments.assets.index', compact('assets'));
    }
}
