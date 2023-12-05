<?php

namespace App\Http\Service;

use App\Http\Repository\InstructorRepository;
use Illuminate\Http\Request;

class InstructorService
{
    protected $instructorRepository;

    public function __construct(InstructorRepository $instructorRepository)
    {
        $this->instructorRepository = $instructorRepository;
    }

    public function createInstructor($data, array $expertiseIds)
    {
        $instructor = $this->instructorRepository->createInstructor($data);

        $instructorId = $this->instructorRepository->getInstructorIDbyName($data['name']);

        $result = $this->instructorRepository->assignExpertises($instructorId, $expertiseIds);

        if($result) {
            return ['status' => 'success', 'message' => 'Membership created successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Membership creation failed'];
        }
    }

    public function updateInstructor($data, array $expertiseIds)
    {
        $instructor = $this->instructorRepository->updateInstructorById($data);

        $result = $this->instructorRepository->assignExpertises($data['id'], $expertiseIds);

        if($result) {
            return ['status' => 'success', 'message' => 'Membership updated successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Membership update failed'];
        }
    }

    public function getInstructorById($id)
    {
        $instructor = $this->instructorRepository->getInstructorWithExpertises($id);

        if($instructor) {
            return $instructor;
        } else {
            return ['status' => 'error', 'message' => 'Personal trainer not found'];
        }
    }

    public function getAllInstructors($request)
    {
        $query = $this->instructorRepository->getQuery();
        
        if ($request->has('query')) {
            $search_text = $request->input('query');
            $query->where(function ($q) use ($search_text) {
                $q->where('name', 'LIKE', "%$search_text%");
            });
        }
    
        if ($request->has('sort_by')) {
            $sort_by = $request->input('sort_by');
            if ($sort_by === 'name_asc') {
                $query->orderBy('name', 'asc');
            } elseif ($sort_by === 'name_desc') {
                $query->orderBy('name', 'desc');
            }
        } else {
            $query->orderBy('name', 'asc');
        }

        $instructors = $query->paginate(10);
        
        $data = [
            'title' => 'Personal Trainer List',
            'personal_trainers' => $instructors,
            'query' => $request->input('query'),
            'sort_by' => $request->input('sort_by'),
        ];

        return $data;
    }

    public function deleteInstructor($id)
    {
        $result = $this->instructorRepository->deleteInstructorById($id);

        if($result) {
            return ['status' => 'success', 'message' => 'Personal trainer deleted successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Personal trainer deletion failed'];
        }
    }
}