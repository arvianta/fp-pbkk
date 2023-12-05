<?php

namespace App\Http\Service;

use App\Http\Repository\ExpertiseRepository;
use Illuminate\Http\Request;

class ExpertiseService
{
    protected $expertiseRepository;

    public function __construct(ExpertiseRepository $expertiseRepository)
    {
        $this->expertiseRepository = $expertiseRepository;
    }

    public function getAllExpertises()
    {
        $expertises = $this->expertiseRepository->getAllExpertises();

        return $expertises;
    }

    public function deleteExpertiseById($id)
    {
        $expertise = $this->expertiseRepository->deleteExpertiseById($id);

        return $expertise;
    }
}