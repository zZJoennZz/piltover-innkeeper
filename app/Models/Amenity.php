<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\AutoUuidModel as Model;

class Amenity extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'description',
        'is_enabled',
    ];
}
