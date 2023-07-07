<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlock extends Model
{
    use HasFactory;
    protected $fillable = [
        'block_id',
        'type', // use enums
        'users_id',
    ];
}
