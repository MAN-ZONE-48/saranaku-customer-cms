<?php

namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;

//Buat ngatur Human Resource
interface UserControllerImpl{
    //Page
    public function getPage();
    public function getUserListPage();
    public function addUserPage();
    public function getUserDetailPage(Request $request);

    //Functions
    public function createUser(Request $request);
    public function deleteUser(Request $request);
    public function updateUser(Request $request);
}
