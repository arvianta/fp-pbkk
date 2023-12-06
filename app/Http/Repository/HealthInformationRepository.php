<?php

namespace App\Http\Repository;

use App\Models\HealthInformation;
use App\Http\Utils\bmiCalculator;
use Illuminate\Database\Eloquent\Builder;

class HealthInformationRepository
{
    protected $bmiCalculator;

    public function __construct(bmiCalculator $bmiCalculator)
    {
        $this->bmiCalculator = $bmiCalculator;
    }
    
    public function getQuery(): Builder
    {
        return HealthInformation::query();
    }

    public function createHealthInformation($request)
    {
        $healthInformation = new HealthInformation();
        $healthInformation->user_id = $request['user_id'];
        $healthInformation->height = $request['height'];
        $healthInformation->weight = $request['weight'];
        $bmi = $this->bmiCalculator->calculateBMI($healthInformation->height, $healthInformation->weight);
        $healthInformation->bmi = $bmi;
        $healthInformation->body_fat_percentage = $request['body_fat_percentage'];
        $healthInformation->save();
        return $healthInformation;
    }

    public function getHealthInformationbyUserId($userid)
    {
        $healthInformation = HealthInformation::where('user_id', $userid)->first();
        if (!$healthInformation) {
            return null;
        }
        return $healthInformation;
    }

    public function saveHealthInformation(HealthInformation $healthInformation)
    {
        $healthInformation->save();
    }

    public function updateHealthInformationbyUserId($data)
    {
        $healthInformation = HealthInformation::where('user_id', $data['user_id'])->first();
        if ($healthInformation) {
            $healthInformation->height = $data['height'];
            $healthInformation->weight = $data['weight'];
            $bmi = $this->bmiCalculator->calculateBMI($healthInformation->height, $healthInformation->weight);
            $healthInformation->bmi = $bmi;
            $healthInformation->body_fat_percentage = $data['body_fat_percentage'];
            $healthInformation->save();
            return $healthInformation;
        }
    }

    public function deleteHealthInformationByUserId($userId)
    {
        $healthInformation = HealthInformation::where('user_id', $userId)->first();
        if ($healthInformation) {
            $healthInformation->delete();
            return 1;
        }
    }
}