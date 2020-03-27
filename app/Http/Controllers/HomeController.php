<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\HomeControllerImpl;

use Illuminate\Http\Request;

class HomeController extends Controller implements HomeControllerImpl
{
    public function getPage(){
        return view('template/master');
    }

    public function getHomePage(){
        return view('cms/home/home');
    }
    
}
