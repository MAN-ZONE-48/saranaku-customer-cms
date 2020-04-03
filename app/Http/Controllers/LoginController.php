<?php

namespace App\Http\Controllers;

use Session;
use Redirect;

use App\Http\Controllers\Impl\LoginControllerImpl;
use Illuminate\Http\Request;

class LoginController extends Controller implements LoginControllerImpl
{

    //Page control
    public function loginPage()
    {
        $image_url = "https://pixabay.com/photos/hardwood-antique-backdrop-1851071/";
        return view('auth/login')
                ->with($image_url);
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        Session::put('current_page', "/cms/home");
        return redirect('/cms');
    }

    public function isLogin()
    {
        if(Session::get('id') != null)
            return redirect('/auth/login');
        else return redirect('/home');

    }

    public function registerPage()
    {
        // TODO: Implement registerPage() method.
    }

    public function registerOwner()
    {
        // TODO: Implement registerOwner() method.
    }
}
