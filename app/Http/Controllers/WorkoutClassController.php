<?php

namespace App\Http\Controllers;

use App\Models\UserWorkoutClass;
use App\Http\Service\WorkoutClassService;
use Illuminate\Http\Request;

class WorkoutClassController extends Controller
{
    protected $workoutClassService;
    
    public function __construct(WorkoutClassService $workoutClassService)
    {
        $this->workoutClassService = $workoutClassService;
    }

    public function enrollClass(Request $request)
    {
        $validatedData = $request->validate([
            'workout_class_id' => 'required',
            'user_id' => 'required',
        ]);
        
        $enrollClass = UserWorkoutClass::create($validatedData);
        return back()->with('status', 'Enroll Class Successfully.');
    }

    public function createWorkoutClass(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'instructor_id' => 'required',
            'description' => 'required',
            'day' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'capacity' => 'required',
        ]);

        $this->workoutClassService->createWorkoutClass($validatedData);
        return back()->with('status', 'Create Workout Class Successfully.');
    }

    public function updateWorkoutClass(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'instructor_id' => 'required',
            'description' => 'required',
            'day' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'capacity' => 'required',
        ]);

        $this->workoutClassService->updateWorkoutClassById($validatedData);
        return back()->with('status', 'Update Workout Class Successfully.');
    }

    public function getAllWorkoutClass(Request $request)
    {
        $workoutClasses = $this->workoutClassService->getAllWorkoutClass($request);
        return view('workout-class', $workoutClasses);
    }

    public function deleteWorkoutClass(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
        ]);

        $this->workoutClassService->deleteWorkoutClassById($validatedData['id']);
        return back()->with('status', 'Delete Workout Class Successfully.');
    }
}
