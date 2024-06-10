<?php

namespace App\Services\User;

use App\Repositories\User\LocationRepository;

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
