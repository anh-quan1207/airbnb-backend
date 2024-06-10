<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TicketRequest;
use App\Services\User\TicketService;

class TicketController extends Controller
{
    protected $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    public function store(TicketRequest $request)
    {
        try {
            $data = $request->validated();
            $ticket = $this->ticketService->createTicket($data);

            return response()->json($ticket, 201);
        } catch (\Exception $e) {
            // Log the exception message for debugging
            \Log::error($e->getMessage());

            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function getTicketsByUserId($userId)
    {
        $tickets = $this->ticketService->getTicketsByUserId($userId);

        return response()->json($tickets);
    }

    public function getTicketsByRoomId($roomId)
    {
        $tickets = $this->ticketService->getTicketsByRoomId($roomId);

        return response()->json($tickets);
    }
}
