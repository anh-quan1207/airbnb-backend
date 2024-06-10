<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index(Request $request)
    {
        $locationId = $request->query('locationId');
        $rooms = $this->roomService->showByLocationId($locationId);

        return response()->json($rooms);
    }

    public function detail(Request $request)
    {
        $roomId = $request->query('roomId');
        $room_detail = $this->roomService->getRoomDetail($roomId);

        return response()->json($room_detail);
    }
}
