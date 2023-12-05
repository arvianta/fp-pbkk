<?php

namespace App\Http\Service;

use App\Http\Repository\PersonalTrainerRepository;
use Illuminate\Http\Request;

class PersonalTrainerService
{
    protected $personalTrainerRepository;

    public function __construct(PersonalTrainerRepository $personalTrainerRepository)
    {
        $this->personalTrainerRepository = $personalTrainerRepository;
    }

    public function createPersonalTrainer($data, array $expertiseIds)
    {
        $personalTrainer = $this->personalTrainerRepository->createPersonalTrainer($data);

        $personalTrainerId = $this->personalTrainerRepository->getPersonalTrainerIDbyName($data['name']);

        $result = $this->personalTrainerRepository->assignExpertises($personalTrainerId, $expertiseIds);

        if($result) {
            return ['status' => 'success', 'message' => 'Membership created successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Membership creation failed'];
        }
    }

    public function updatePersonalTrainer($data, array $expertiseIds)
    {
        $personalTrainer = $this->personalTrainerRepository->updatePersonalTrainerById($data);

        $result = $this->personalTrainerRepository->assignExpertises($data['id'], $expertiseIds);

        if($result) {
            return ['status' => 'success', 'message' => 'Membership updated successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Membership update failed'];
        }
    }

    public function getPersonalTrainerById($id)
    {
        $personalTrainer = $this->personalTrainerRepository->getPersonalTrainerWithExpertises($id);

        if($personalTrainer) {
            return $personalTrainer;
        } else {
            return ['status' => 'error', 'message' => 'Personal trainer not found'];
        }
    }

    public function getAllPersonalTrainers($request)
    {
        $query = $this->personalTrainerRepository->getQuery();
        
        if ($request->has('query')) {
            $search_text = $request->input('query');
            $query->where(function ($q) use ($search_text) {
                $q->where('name', 'LIKE', "%$search_text%")
                    ->orWhere('email', 'LIKE', "%$search_text%")
                    ->orWhere('phone_number', 'LIKE', "%$search_text%")
                    ->orWhere('age', 'LIKE', "%$search_text%")
                    ->orWhere('height', 'LIKE', "%$search_text%")
                    ->orWhere('weight', 'LIKE', "%$search_text%");
            });
        }
    
        if ($request->has('sort_by')) {
            $sort_by = $request->input('sort_by');
            if ($sort_by === 'name_asc') {
                $query->orderBy('name', 'asc');
            } elseif ($sort_by === 'name_desc') {
                $query->orderBy('name', 'desc');
            } elseif ($sort_by === 'age_asc') {
                $query->orderBy('age', 'asc');
            } elseif ($sort_by === 'age_desc') {
                $query->orderBy('age', 'desc');
            } elseif ($sort_by === 'height_asc') {
                $query->orderBy('height', 'asc');
            } elseif ($sort_by === 'height_desc') {
                $query->orderBy('height', 'desc');
            } elseif ($sort_by === 'weight_asc') {
                $query->orderBy('weight', 'asc');
            } elseif ($sort_by === 'weight_desc') {
                $query->orderBy('weight', 'desc');
            }
        } else {
            $query->orderBy('name', 'asc');
        }

        $personalTrainers = $query->paginate(10);
        
        $data = [
            'title' => 'Personal Trainer List',
            'personal_trainers' => $personalTrainers,
            'query' => $request->input('query'),
            'sort_by' => $request->input('sort_by'),
        ];

        return $data;
    }

    public function deletePersonalTrainer($id)
    {
        $result = $this->personalTrainerRepository->deletePersonalTrainerById($id);

        if($result) {
            return ['status' => 'success', 'message' => 'Personal trainer deleted successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Personal trainer deletion failed'];
        }
    }
}