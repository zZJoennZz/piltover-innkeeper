<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlockAdditional extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_blocks_id',
        'services_id',
        'notes',
    ];
}
