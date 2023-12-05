<?php

namespace App\Http\Repository;

use App\Models\HealthInformation;
use Illuminate\Database\Eloquent\Builder;

class HealthInformationRepository
{
    public function getQuery(): Builder
    {
        return HealthInformation::query();
    }

    public function createHealthInformation($request)
    {
        $healthInformation = new HealthInformation();
        $healthInformation->user_id = $request->input('user_id');
        $healthInformation->bmi = $request->input('bmi');
        $healthInformation->body_fat_percentage = $request->input('body_fat_percentage');
        $healthInformation->save();
        return $healthInformation;
    }

    public function getHealthInformationbyUserId($userid)
    {
        $healthInformation = HealthInformation::where('user_id', $userid)->first();
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
            $healthInformation->bmi = $data['bmi'];
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