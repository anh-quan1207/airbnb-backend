<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'room_name',
        'location_id',
        'guest',
        'bedRoom',
        'bathRoom',
        'description',
        'price',
        'projector_or_tv',
        'pool',
        'image',
    ];

    /**
     * Relationship với bảng locations.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
