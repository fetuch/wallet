<?php

namespace App\Http\Controllers\Investments;

use App\Http\Controllers\Controller;

class AssetsController extends Controller
{
    public function index()
    {
        $assets = auth()->user()->assets;

        return view('investments.assets.index', compact('assets'));
    }
}
