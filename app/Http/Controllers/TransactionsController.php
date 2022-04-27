<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TransactionsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('investments.transactions.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('investments.transactions.create');
    }
}
