<?php

namespace App\Http\Repository;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Builder;

class InstructorRepository
{
    public function getQuery(): Builder
    {
        return Instructor::query();
    }
    
    public function createInstructor($data)
    {
        $instructor = new Instructor();
        $instructor->name = $data['name'];
        $instructor->save();

        return $instructor;
    }

    public function getInstructorIDbyName($name)
    {
        $instructor = Instructor::where('name', $name)->first();
        return $instructor->id;
    }

    public function assignExpertises($instructorId, array $expertiseIds)
    {
        $instructor = Instructor::find($instructorId);

        if (!$instructor) {
            
            return false;
        }

        $instructor->expertises()->sync($expertiseIds);

        return true;
    }

    public function getInstructorWithExpertises($instructorId)
    {
        $instructor = Instructor::with('expertises')->find($instructorId);

        if (!$instructor) {
            return null;
        }

        $expertiseNames = $instructor->expertises->pluck('name')->toArray();

        $instructorData = $instructor->toArray();
        $instructorData['expertise_names'] = $expertiseNames;

        return $instructorData;
    }

    public function updateInstructorById($data)
    {
        $instructor = Instructor::find($data['id']);

        if (!$instructor) {
            return null;
        }
        $instructor->name = $data['name'] ?? $instructor->name;

        $instructor->save();

        return $instructor;
    }

    public function deleteInstructorById($id)
    {
        $instructor = Instructor::find($id);

        if (!$instructor) {
            return false;
        }

        $instructor->delete();

        return true;
    }
}