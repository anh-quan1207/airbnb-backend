<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RoomService;

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
}
