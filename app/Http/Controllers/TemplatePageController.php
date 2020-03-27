<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\TemplatePageControllerImpl;

use Illuminate\Http\Request;

class TemplatePageController extends Controller implements TemplatePageControllerImpl
{
    public function getErrorMessage(Request $request){
        return view('exceptions/error-modals')
                ->with('title', $request->get('title'))
                ->with('message', $request->get('message'));
    }
}
