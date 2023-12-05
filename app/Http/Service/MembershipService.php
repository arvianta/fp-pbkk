<?php

namespace App\Http\Service;

use App\Http\Repository\MembershipRepository;
use Illuminate\Http\Request;

class MembershipService
{
    protected $membershipRepository;

    public function __construct(MembershipRepository $membershipRepository)
    {
        $this->membershipRepository = $membershipRepository;
    }

    public function createMembership($data)
    {
        $result = $this->membershipRepository->createMembership($data);
        
        if($result) {
            return ['status' => 'success', 'message' => 'Membership created successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Membership creation failed'];
        }
    }
    
    public function getAllMembership()
    {
        return $this->membershipRepository->getAllMembership();
    }

    public function findMembershipById($id)
    {
        return $this->membershipRepository->findMembershipById($id);
    }

    public function updateMembership($data)
    {
        $membership = $this->membershipRepository->updateMembership($data);
        
        if($membership) {
            return ['status' => 'success', 'message' => 'Membership updated successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Membership update failed'];
        }
    }

    public function deleteMembershipById($id)
    {
        return $this->membershipRepository->deleteMembershipById($id);
    }
}