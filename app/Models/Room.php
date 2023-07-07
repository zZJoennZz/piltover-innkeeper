<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'description',
        'room_types_id',
        'rate',
        'max_capacity',
        'is_smoking_allowed',
        'is_enabled',
        'users_id',
    ];
}
