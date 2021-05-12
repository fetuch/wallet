<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        return view('investments.overview');
    }
}
