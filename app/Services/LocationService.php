<?php

namespace App\Services;

use App\Repositories\LocationRepository;

class LocationService
{
    protected $locationRepository;

    public function __construct(LocationRepository $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    public function searchLocations($name)
    {
        return $this->locationRepository->searchByName($name);
    }
}
