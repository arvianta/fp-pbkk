<?php

namespace App\Http\Service;

use App\Http\Repository\WorkoutClassRepository;

class WorkoutClassService
{
    private $workoutClassRepository;

    public function __construct(WorkoutClassRepository $workoutClassRepository)
    {
        $this->workoutClassRepository = $workoutClassRepository;
    }

    public function createWorkoutClass($data)
    {
        $this->workoutClassRepository->createWorkoutClass($data);
    }

    public function getAllWorkoutClass($request)
    {
        $query = $this->workoutClassRepository->getQuery();
        
        if ($request->has('query')) {
            $search_text = $request->input('query');
            $query->where(function ($q) use ($search_text) {
                $q->where('name', 'LIKE', "%$search_text%")
                    ->orWhere('description', 'LIKE', "%$search_text%")
                    ->orWhere('day', 'LIKE', "%$search_text%")
                    ->orWhere('time', 'LIKE', "%$search_text%")
                    ->orWhere('duration', 'LIKE', "%$search_text%")
                    ->orWhere('capacity', 'LIKE', "%$search_text%");
            });
        }

        if ($request->has('sort_by')) {
            $sort_by = $request->input('sort_by');
            if ($sort_by === 'name_asc') {
                $query->orderBy('name', 'asc');
            } elseif ($sort_by === 'name_desc') {
                $query->orderBy('name', 'desc');
            } elseif ($sort_by === 'description_asc') {
                $query->orderBy('description', 'asc');
            } elseif ($sort_by === 'description_desc') {
                $query->orderBy('description', 'desc');
            } elseif ($sort_by === 'day_asc') {
                $query->orderBy('day', 'asc');
            } elseif ($sort_by === 'day_desc') {
                $query->orderBy('day', 'desc');
            } elseif ($sort_by === 'time_asc') {
                $query->orderBy('time', 'asc');
            } elseif ($sort_by === 'time_desc') {
                $query->orderBy('time', 'desc');
            } elseif ($sort_by === 'duration_asc') {
                $query->orderBy('duration', 'asc');
            } elseif ($sort_by === 'duration_desc') {
                $query->orderBy('duration', 'desc');
            } elseif ($sort_by === 'capacity_asc') {
                $query->orderBy('capacity', 'asc');
            } elseif ($sort_by === 'capacity_desc') {
                $query->orderBy('capacity', 'desc');
            }
        } else {
            $query->orderBy('name', 'asc');
        }

        $workout_classes = $query->paginate(10);

        $data = [
            'title' => 'Personal Trainer List',
            'workout_classes' => $workout_classes,
            'query' => $request->input('query'),
            'sort_by' => $request->input('sort_by'),
        ];

        return $data;
    }

    public function deleteWorkoutClassById($id)
    {
        $result = $this->workoutClassRepository->deleteWorkoutClassById($id);

        if($result) {
            return ['status' => 'success', 'message' => 'Workout class deleted successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Workout class deletion failed'];
        }
    }

    public function updateWorkoutClassById($data)
    {
        $this->workoutClassRepository->updateWorkoutClassById($data);

        return ['status' => 'success', 'message' => 'Workout class updated successfully'];
    }
}