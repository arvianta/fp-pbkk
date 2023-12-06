<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\HealthInformationService;

class HealthInformationController extends Controller
{
    protected $healthInformationService;

    public function __construct(HealthInformationService $healthInformationService)
    {
        $this->healthInformationService = $healthInformationService;
    }

    public function createHealthInformation(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'body_fat_percentage' => 'required',
        ]);
        
        $healthInformation = $this->healthInformationService->createHealthInformation($validatedData);
        return view ('dashboard.user.bmi', ['bmi' => $healthInformation]);
    }

    public function getHealthInformationbyUserId(Request $request, $user_id)
    {
        $healthInformation = $this->healthInformationService->getHealthInformationbyUserId($user_id);
        return view('dashboard.user.bmi', ['bmi' => $healthInformation]);
    }

    public function updateHealthInformationbyUserId(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'body_fat_percentage' => 'required',
        ]);

        $healthInformation = $this->healthInformationService->updateHealthInformationbyUserId($validatedData);
        return view('dashboard.user.bmi', ['bmi' => $healthInformation]);
    }
}
