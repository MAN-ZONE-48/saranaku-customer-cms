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

    public function getUserDetailPage(Request $request){
        return view('cms/user/pages/user-detail');
    }

    public function createUser(Request $request)
    {
        // TODO: Implement createUser() method.
    }

    public function deleteUser(Request $request)
    {
        // TODO: Implement deleteUser() method.
    }

    public function updateUser(Request $request)
    {
        // TODO: Implement updateUser() method.
    }
}
