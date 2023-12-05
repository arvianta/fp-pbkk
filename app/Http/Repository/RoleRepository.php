<?php

namespace App\Http\Repository;

use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;

class RoleRepository
{
    public function getQuery(): Builder
    {
        return Role::query();
    }

    public function createRole($name)
    {
        $role = new Role();
        $role->name = $name;
        $this->saveRole($role);
        return $role;
    }

    public function findRoleById($id)
    {
        return Role::find($id);
    }

    public function saveRole(Role $role)
    {
        $role->save();
    }

    public function deleteRoleById($id)
    {
        $role = Role::find($id);
        if ($role) {
            $role->delete();
            return 1;
        }
    }
}