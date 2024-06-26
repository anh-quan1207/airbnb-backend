<?php

namespace App\Services\User;

use App\Repositories\User\TicketRepository;

class TicketService
{
    protected $ticketRepository;

    public function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function createTicket($data)
    {
        return $this->ticketRepository->create($data);
    }

    public function getTicketsByUserId($userId)
    {
        return $this->ticketRepository->getByUserId($userId);
    }

    public function getTicketsByRoomId($roomId) {
        return $this->ticketRepository->getByRoomId($roomId);
    }
}
