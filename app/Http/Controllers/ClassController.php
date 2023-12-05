<?php

namespace App\Http\Controllers;

use App\Models\UserWorkoutClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function enrollClass(Request $request)
    {
        $validatedData = $request->validate([
            'workout_class_id' => 'required',
            'user_id' => 'required',
        ]);
        
        $enrollClass = UserWorkoutClass::create($validatedData);
        return back()->with('status', 'Enroll Class Successfully.');
    }
}
