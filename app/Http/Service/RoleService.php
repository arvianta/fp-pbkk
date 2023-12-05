<?php

namespace App\Http\Service;

use App\Http\Repository\RoleRepository;
use Illuminate\Http\Request;

class RoleService
{
    protected $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function createRole($request)
    {
        $role = $this->roleRepository->createRole($request);

        return $role;
    }

    public function getAllRole()
    {
        $roles = $this->roleRepository->getQuery()->get();

        return $roles;
    }

    public function getRoleById($id)
    {
        $role = $this->roleRepository->findRoleById($id);

        return $role;
    }

    public function updateRole(Request $request, $id)
    {
        $role = $this->roleRepository->findRoleById($id);
        if ($role) {
            $role->name = $request->input('name');
            $role->description = $request->input('description');
            $this->roleRepository->saveRole($role);
            return $role;
        }
    }

    public function deleteRoleById($id)
    {
        $role = $this->roleRepository->findRoleById($id);
        if ($role) {
            $this->roleRepository->deleteRoleById($id);
            return 1;
        }
    }
}