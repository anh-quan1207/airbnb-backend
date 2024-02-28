<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'location_name',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}