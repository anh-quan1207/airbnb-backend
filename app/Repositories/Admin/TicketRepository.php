<?php

namespace App\Repositories\Admin;

use App\Models\Ticket;

class TicketRepository
{
    public function getAllTickets()
    {
        $tickets = Ticket::join('rooms', 'tickets.room_id', '=', 'rooms.id')
            ->join('users', 'tickets.user_id', '=', 'users.id')
            ->join('locations', 'rooms.location_id', '=', 'locations.id')
            ->select(
                'tickets.id as ticket_id',
                'tickets.check_in',
                'tickets.check_out',
                'tickets.created_at',
                'users.id as user_id',
                'users.user_name',
                'users.email',
                'users.phone',
                'users.address',
                'users.gender',
                'users.birthday',
                'rooms.id as room_id',
                'rooms.room_name',
                'rooms.location_id',
                'rooms.guest',
                'rooms.bed_room',
                'rooms.bath_room',
                'rooms.description',
                'rooms.price',
                'rooms.projector_or_tv',
                'rooms.pool',
                'rooms.image',
                'locations.location_name'
            )
            ->orderBy('tickets.id', 'desc')
            ->get();

        $result = [];

        foreach ($tickets as $ticket) {
            $result[] = [
                'user' => [
                    'id' => $ticket->user_id,
                    'user_name' => $ticket->user_name,
                    'email' => $ticket->email,
                    'phone' => $ticket->phone,
                    'address' => $ticket->address,
                    'gender' => $ticket->gender,
                    'birthday' => $ticket->birthday,
                ],
                'ticket' => [
                    'id' => $ticket->ticket_id,
                    'check_in' => $ticket->check_in,
                    'check_out' => $ticket->check_out,
                    'created_at' => $ticket->created_at,
                ],
                'room' => [
                    'id' => $ticket->room_id,
                    'room_name' => $ticket->room_name,
                    'location_id' => $ticket->location_id,
                    'location_name' => $ticket->location_name,
                    'guest' => $ticket->guest,
                    'bed_room' => $ticket->bed_room,
                    'bath_room' => $ticket->bath_room,
                    'description' => $ticket->description,
                    'price' => $ticket->price,
                    'projector_or_tv' => $ticket->projector_or_tv,
                    'pool' => $ticket->pool,
                    'image' => $ticket->image,
                ]
            ];
        }

        return $result;
    }
}
