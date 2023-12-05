<?php

namespace App\Http\Controllers;

use App\Http\Service\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function createRole(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:128',
        ]);

        $role = $this->roleService->createRole($validatedData);

        if ($role) {
            return redirect()->route('role.list')->with('status', 'Role created successfully');
        } else {
            return redirect()->route('role.list')->with('error', 'Role creation failed');
        }
    }

    public function getAllRole()
    {
        $roles = $this->roleService->getAllRole();

        return view('dashboard.admin.rolelist', [
            'title' => 'Role List',
            'roles' => $roles,
        ]);
    }

    public function deleteRole(Request $request)
    {
        $validatedData = $request->validate([
            'role_id' => 'required|integer',
        ]);

        $result = $this->roleService->deleteRoleById($validatedData['role_id']);

        if ($result) {
            return redirect()->route('role.list')->with('status', 'Role deleted successfully');
        } else {
            return redirect()->route('role.list')->with('error', 'Role deletion failed');
        }
    }

}
