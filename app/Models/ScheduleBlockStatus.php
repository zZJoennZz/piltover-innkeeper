<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlockStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_blocks_id',
        'status', //use enums
    ];
}
