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
            'bmi' => 'required',
            'body_fat_percentage' => 'required',
        ]);
        
        $healthInformation = $this->healthInformationService->createHealthInformation($validatedData);
        return $healthInformation;
    }

    public function getHealthInformationbyUserId(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
        ]);

        $healthInformation = $this->healthInformationService->getHealthInformationbyUserId($validatedData['user_id']);
        return $healthInformation;
    }

    public function updateHealthInformationbyUserId(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'bmi' => 'required',
            'body_fat_percentage' => 'required',
        ]);

        $healthInformation = $this->healthInformationService->updateHealthInformationbyUserId($validatedData);
        return $healthInformation;
    }
}
