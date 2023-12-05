<?php

namespace App\Http\Service;

use App\Http\Repository\HealthInformationRepository;
use Illuminate\Http\Request;

class HealthInformationService
{
    protected $healthInformationRepository;

    public function __construct(HealthInformationRepository $healthInformationRepository)
    {
        $this->healthInformationRepository = $healthInformationRepository;
    }

    public function createHealthInformation($data)
    {
        $healthInformation = $this->healthInformationRepository->createHealthInformation($data);

        return $healthInformation;
    }

    public function getHealthInformationbyUserId($userId)
    {
        $healthInformation = $this->healthInformationRepository->getHealthInformationbyUserId($userId);

        return $healthInformation;
    }

    public function updateHealthInformationbyUserId($data)
    {
        $healthInformation = $this->healthInformationRepository->updateHealthInformationbyUserId($data);

        return $healthInformation;
    }

    public function deleteHealthInformationByUserId($id)
    {
        $healthInformation = $this->healthInformationRepository->deleteHealthInformationByUserId($id);

        return $healthInformation;
    }
}