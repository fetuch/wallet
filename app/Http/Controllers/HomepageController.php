<?php

namespace App\Http\Controllers;

class HomepageController extends Controller
{
    public function invoke()
    {
        return view('homepage');
    }
}
