<?php

namespace App\Http\Repository;

use App\Models\WorkoutClass;
use Illuminate\Database\Eloquent\Builder;

class WorkoutClassRepository
{
    public function getQuery(): Builder
    {
        return WorkoutClass::query();
    }

    public function createWorkoutClass($data)
    {
        $workoutClass = new WorkoutClass();
        $workoutClass->name = $data['name'];
        $workoutClass->instructor_id = $data['instructor_id'];
        $workoutClass->description = $data['description'];
        $workoutClass->day = $data['day'];
        $workoutClass->time = $data['time'];
        $workoutClass->duration = $data['duration'];
        $workoutClass->capacity = $data['capacity'];
        $workoutClass->save();
    }

    public function updateWorkoutClassById($data)
    {
        $workoutClass = WorkoutClass::find($data->input('id'));
        if ($workoutClass) {
            $workoutClass->name = $data['name'];
            $workoutClass->instructor_id = $data['instructor_id'];
            $workoutClass->description = $data['description'];
            $workoutClass->day = $data['day'];
            $workoutClass->time = $data['time'];
            $workoutClass->duration = $data['duration'];
            $workoutClass->capacity = $data['capacity'];
            $workoutClass->save();
            return $workoutClass;
        }
    }

    public function deleteWorkoutClassById($id)
    {
        $workoutClass = WorkoutClass::find($id);
        if ($workoutClass) {
            $workoutClass->delete();
            return true;
        }
    }
}