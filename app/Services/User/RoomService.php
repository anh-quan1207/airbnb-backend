<?php

namespace App\Services\User;

use App\Repositories\User\RoomRepository;

class RoomService
{
    protected $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function showByLocationId($locationId)
    {
        return $this->roomRepository->showByLocationId($locationId);
    }

    public function getRoomDetail($roomId)
    {
        return $this->roomRepository->getRoomDetail($roomId);
    }
}
