<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlockDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_blocks_id',
        'from_date',
        'to_date',
    ];
}
