<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\CashierControllerImpl;

use Illuminate\Http\Request;

class CashierController extends Controller implements CashierControllerImpl
{
    public function getPage(){
        return view('cms/transaction/cashier');
    }
}
