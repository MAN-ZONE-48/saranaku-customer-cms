<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getPage(){
        return view('cms/transaction/transaction-home');
    }

    public function cashierPage(){
        return view('cms/transaction/pages/cashier');
    }
}
