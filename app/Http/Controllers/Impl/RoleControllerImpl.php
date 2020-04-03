<?php

namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;

//Buat ngatur function per role
interface RoleControllerImpl{
    //Page
    public function getPage();
    public function getRoleDetailModal(Request $request);

    //Functions
    public function createRole(Request $request);
    public function deleteRole(Request $request);
    public function updateRole(Request $request);
}
