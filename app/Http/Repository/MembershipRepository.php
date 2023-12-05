<?php

namespace App\Http\Repository;

use App\Models\Membership;
use Illuminate\Database\Eloquent\Builder;

class MembershipRepository
{
    public function getQuery(): Builder
    {
        return Membership::query();
    }

    public function createMembership($data)
    {
        $membership = new Membership();
        $membership->duration = $data['duration'];
        $membership->cost = $data['cost'];
        $this->saveMembership($membership);
        return $membership;
    }

    public function getAllMembership()
    {
        return Membership::all();
    }

    public function findMembershipById($id)
    {
        return Membership::find($id);
    }

    public function saveMembership(Membership $membership)
    {
        $membership->save();
    }

    public function updateMembership($data)
    {
        $membership = Membership::find($data->input('id'));
        if ($membership) {
            $membership->duration = $data->input('duration');
            $membership->cost = $data->input('cost');
            $this->saveMembership($membership);
            return $membership;
        }
    }

    public function deleteMembershipById($id)
    {
        $membership = Membership::find($id);
        if ($membership) {
            $membership->delete();
            return 1;
        }
    }
}