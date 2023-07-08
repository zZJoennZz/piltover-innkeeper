<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\AutoUuidModel as Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'default_rate',
        'default_max_capacity',
        'is_enabled',
    ];
}
