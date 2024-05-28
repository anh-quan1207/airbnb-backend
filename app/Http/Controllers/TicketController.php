<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TicketService;
use App\Http\Requests\TicketRequest;

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
}
