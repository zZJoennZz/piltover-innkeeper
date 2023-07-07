<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlockTimeSlot extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_blocks_id',
        'from_time',
        'to_time',
    ];
}
