<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\AutoUuidModel as Model;

class ScheduleBlock extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'block_id',
        'type', // use enums
        'users_id',
    ];
}
