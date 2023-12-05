<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\MembershipService;

class MembershipController extends Controller
{
    protected $membershipService;

    public function __construct(MembershipService $membershipService)
    {
        $this->membershipService = $membershipService;
    }

    public function createMembership(Request $request)
    {
        $validatedData = $request->validate([
            'duration' => 'required',
            'cost' => 'required',
        ]);
        
        $result = $this->membershipService->createMembership($validatedData);
        if ($result['status'] == 'success') {
            return redirect()->route('admin.membership')->with($result);
        } else {
            return redirect()->route('admin.membership')->with($result);
        }
    }

    public function getAllMembership()
    {
        return $this->membershipService->getAllMembership();
    }

    public function findMembershipById($id)
    {
        return $this->membershipService->findMembershipById($id);
    }

    public function updateMembership(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'duration' => 'required',
            'cost' => 'required',
        ]);
        
        $result = $this->membershipService->updateMembership($validatedData);
        if ($result['status'] == 'success') {
            return redirect()->route('admin.membership')->with($result);
        } else {
            return redirect()->route('admin.membership')->with($result);
        }
    }

    public function deleteMembershipById($id)
    {
        $result = $this->membershipService->deleteMembershipById($id);
        if ($result) {
            return redirect()->route('admin.membership')->with('success', 'Membership deleted successfully');
        } else {
            return redirect()->route('admin.membership')->with('error', 'Membership deletion failed');
        }
    }
}
