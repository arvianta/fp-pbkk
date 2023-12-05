<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Service\InstructorService;

class InstructorController extends Controller
{
    protected $instructorService;

    public function __construct(InstructorService $instructorService)
    {
        $this->instructorService = $instructorService;
    }

    public function createInstructor(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'certification' => 'required|string|max:255',
            'session_cost' => 'required|numeric',
        ]);

        // Extract expertise ids
        $expertiseIds = $request->input('expertise_ids', []);

        $result = $this->instructorService->createInstructor($validatedData, $expertiseIds);

        return redirect()->back()->with('status', $result['message']);
    }

    public function updateInstructor(Request $request)
    {
    
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'certification' => 'required|string|max:255',
            'session_cost' => 'required|numeric',
        ]);
        
        $expertiseIds = $request->input('expertise_ids', []);

        $result = $this->instructorService->updateInstructor($validatedData, $expertiseIds);

        if ($result['status'] === 'success') {
            return redirect()->back()->with('status', $result['message']);
        } else {
            return redirect()->route('instructor.list')->with('error', $result['message']);
        }
    }

    public function getinstructorById(Request $request)
    {
        $data = $this->instructorService->getinstructorById($request->id);
        
        return view('dashboard.admin.instructorsinfo', $data);
    }

    public function getAllinstructors(Request $request)
    {
        $data = $this->instructorService->getAllinstructors($request);

        return view('dashboard.admin.instructors', $data);
    }

    public function deleteInstructor(Request $request)
    {
        $result = $this->instructorService->deleteInstructor($request->id);

        if ($result['status'] === 'success') {
            return redirect()->route('instructor.list')->with('status', $result['message']);
        } else {
            return redirect()->route('instructor.list')->with('error', $result['message']);
        }
    }
}
