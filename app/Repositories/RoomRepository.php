<?php

namespace App\Repositories;

use App\Models\Room;

class RoomRepository
{
    public function showByLocationId($locationId)
    {
        return Room::where('location_id', $locationId)->select('id', 'room_name', 'image')->get();
    }

    public function getRoomDetail($roomId)
    {
        return Room::join('locations', 'rooms.location_id', '=', 'locations.id')
                    ->join('provinces', 'locations.province_id', '=', 'provinces.id')
                    ->select('rooms.*', 'locations.location_name', 'provinces.province_name')
                    ->where('rooms.id', $roomId)
                    ->first();
    }
}
