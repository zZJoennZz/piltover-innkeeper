<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlockRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_blocks_id',
        'rooms_id',
    ];
}
