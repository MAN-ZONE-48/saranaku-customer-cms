<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Impl\RoleControllerImpl;
use Illuminate\Http\Request;

class RoleController extends Controller implements RoleControllerImpl
{
    //
    public function getPage()
    {
        return view('cms/user/pages/role-list');
    }

    public function getRoleDetailModal(Request $request)
    {
        // TODO: Implement getRoleDetailModal() method.
    }

    public function createRole(Request $request)
    {
        // TODO: Implement createRole() method.
    }

    public function deleteRole(Request $request)
    {
        // TODO: Implement deleteRole() method.
    }

    public function updateRole(Request $request)
    {
        // TODO: Implement updateRole() method.
    }
}
