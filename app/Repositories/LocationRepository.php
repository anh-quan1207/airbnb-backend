<?php

namespace App\Repositories;

use App\Models\Location;

class LocationRepository
{
    public function searchByName($name)
    {
        return Location::when($name, function ($query) use ($name) {
            return $query->where('location_name', 'like', '%' . $name . '%');
        })->get();
    }
}
