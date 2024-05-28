<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepository
{
    public function create($data)
    {
        return Ticket::create($data);
    }
}
