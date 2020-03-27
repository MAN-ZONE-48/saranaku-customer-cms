<?php 

namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;

//Buat ngatur Human Resource
interface UserControllerImpl{
    public function getPage();
    public function getUserListPage();
    public function addUserPage();
}