<?php

namespace App\Http\Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserRepository
{
    public function getQuery(): Builder
    {
        return User::query();
    }

    public function findUserById($id)
    {
        return User::find($id);
    }

    public function saveUser(User $user)
    {
        $user->save();
    }

    public function deleteUserById($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return 1;
        }
    }
}