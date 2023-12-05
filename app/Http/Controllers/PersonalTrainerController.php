<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Service\PersonalTrainerService;

class PersonalTrainerController extends Controller
{
    protected $personalTrainerService;

    public function __construct(PersonalTrainerService $personalTrainerService)
    {
        $this->personalTrainerService = $personalTrainerService;
    }

    public function createPersonalTrainer(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:personal_trainers,email',
            'certification' => 'required|string|max:255',
            'session_cost' => 'required|numeric',
        ]);

        // Extract expertise ids
        $expertiseIds = $request->input('expertise_ids', []);

        $result = $this->personalTrainerService->createPersonalTrainer($validatedData, $expertiseIds);

        return view('dashboard.admin.personaltrainerlist', $result);
    }

    public function updatePersonalTrainer(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:personal_trainers,email',
            'certification' => 'required|string|max:255',
            'session_cost' => 'required|numeric',
        ]);
        
        $expertiseIds = $request->input('expertise_ids', []);

        $result = $this->personalTrainerService->updatePersonalTrainer($validatedData, $expertiseIds);

        if ($result['status'] === 'success') {
            return redirect()->back()->with('status', $result['message']);
        } else {
            return redirect()->route('personaltrainer.list')->with('error', $result['message']);
        }
    }

    public function getPersonalTrainerById(Request $request)
    {
        $data = $this->personalTrainerService->getPersonalTrainerById($request->id);

        return view('dashboard.admin.personaltrainerinfo', $data);
    }

    public function getAllPersonalTrainers(Request $request)
    {
        $data = $this->personalTrainerService->getAllPersonalTrainers($request);

        return view('dashboard.admin.personaltrainerlist', $data);
    }
}
