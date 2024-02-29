<?php

namespace App\Repositories;

use App\Models\Room;

class RoomRepository
{
    public function showByLocationId($locationId)
    {
        return Room::where('location_id', $locationId)->get();
    }
}
