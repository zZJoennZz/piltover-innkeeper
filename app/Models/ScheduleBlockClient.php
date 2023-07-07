<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBlockClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_blocks_id',
        'clients_id',
    ];
}
