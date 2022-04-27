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

        foreach($assets as $asset)
        {
            $asset->valuation = $asset->resource->current_valuation;
        }

        return view('investments.assets.index', compact('assets'));
    }
}
