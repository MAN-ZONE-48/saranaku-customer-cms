<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\HomeControllerImpl;

use Session;
use Illuminate\Http\Request;

class HomeController extends Controller implements HomeControllerImpl
{
    public function getPage(){
        $currentPage = Session::get('current_page');

        return view('template/master')
                ->with("currentPage", $currentPage);
    }

    public function getHomePage(){
        return view('cms/home/home');
    }
    
}
