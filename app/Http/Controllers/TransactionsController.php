<?php

namespace App\Http\Controllers;

class TransactionsController extends Controller
{
    public function index()
    {
        return view('investments.transactions.index');
    }

    public function create()
    {
        return view('investments.transactions.create');
    }
}
