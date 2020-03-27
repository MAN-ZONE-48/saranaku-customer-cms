<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\UserControllerImpl;

use Illuminate\Http\Request;

class UserController extends Controller implements UserControllerImpl
{
    public function getPage(){
        return view('cms/user/user-home');
    }

    public function getUserListPage(){
        return view('cms/user/pages/user-list');
    }

    public function addUserPage(){
        return view('cms/user/pages/add-user');
    }

}
