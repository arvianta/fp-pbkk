<?php

namespace App\Http\Repository;

use App\Models\Expertise;
use Illuminate\Database\Eloquent\Builder;

class ExpertiseRepository
{
    public function getAllExpertises()
    {
        $expertises = Expertise::all();
        return $expertises;
    }

    public function deleteExpertiseById($id)
    {
        $expertise = Expertise::where('id', $id)->first();
        if ($expertise) {
            $expertise->delete();
            return 1;
        }
    }
}