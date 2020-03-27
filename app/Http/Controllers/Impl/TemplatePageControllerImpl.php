<?php 

namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;

//Buat ngatur Human Resource
interface TemplatePageControllerImpl{
    public function getErrorMessage(Request $request);
    public function saveCurrentPage(Request $request);
}