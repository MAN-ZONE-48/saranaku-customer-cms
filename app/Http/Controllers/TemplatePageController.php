<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\TemplatePageControllerImpl;

use Illuminate\Http\Request;
use Session;
use App\Entity\ResponseDTO;

class TemplatePageController extends Controller implements TemplatePageControllerImpl
{
    public function getErrorMessage(Request $request){
        return view('exceptions/error-modals')
                ->with('title', $request->get('title'))
                ->with('message', $request->get('message'));
    }

    public function saveCurrentPage(Request $request){
        Session::forget('current_page');
        Session::put('current_page', $request->get('uri'));

        $dto = new ResponseDTO("success", 200, "Current page session updated!", Session::get('current_page'));
        return json_encode($dto);
    }
}
