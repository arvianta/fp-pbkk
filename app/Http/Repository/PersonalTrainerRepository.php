<?php

namespace App\Http\Repository;

use App\Models\PersonalTrainer;
use Illuminate\Database\Eloquent\Builder;

class PersonalTrainerRepository
{
    public function getQuery(): Builder
    {
        return PersonalTrainer::query();
    }
    
    public function createPersonalTrainer($data)
    {
        $personalTrainer = new PersonalTrainer();
        $personalTrainer->name = $data['name'];
        $personalTrainer->certification = $data['certification'];
        $personalTrainer->session_cost = $data['session_cost'];
        $personalTrainer->save();

        return $personalTrainer;
    }

    public function getPersonalTrainerIDbyName($name)
    {
        $personalTrainer = PersonalTrainer::where('name', $name)->first();
        return $personalTrainer->id;
    }

    public function assignExpertises($personalTrainerId, array $expertiseIds)
    {
        $personalTrainer = PersonalTrainer::find($personalTrainerId);

        if (!$personalTrainer) {
            
            return false;
        }

        $personalTrainer->expertises()->sync($expertiseIds);

        return true;
    }

    public function getPersonalTrainerWithExpertises($personalTrainerId)
    {
        $personalTrainer = PersonalTrainer::with('expertises')->find($personalTrainerId);

        if (!$personalTrainer) {
            return null;
        }

        // Extract expertise names
        $expertiseNames = $personalTrainer->expertises->pluck('name')->toArray();

        // Add expertise names to personal trainer data
        $personalTrainerData = $personalTrainer->toArray();
        $personalTrainerData['expertise_names'] = $expertiseNames;

        return $personalTrainerData;
    }

    public function updatePersonalTrainerById($data)
    {
        $personalTrainer = PersonalTrainer::find($data['id']);

        if (!$personalTrainer) {
            return null;
        }

        // Update personal trainer data
        $personalTrainer->name = $data['name'] ?? $personalTrainer->name;
        $personalTrainer->certification = $data['certification'] ?? $personalTrainer->certification;
        $personalTrainer->session_cost = $data['session_cost'] ?? $personalTrainer->session_cost;

        // Save the changes
        $personalTrainer->save();

        return $personalTrainer;
    }

    public function deletePersonalTrainerById($id)
    {
        $personalTrainer = PersonalTrainer::find($id);

        if (!$personalTrainer) {
            return false;
        }

        $personalTrainer->delete();

        return true;
    }
}