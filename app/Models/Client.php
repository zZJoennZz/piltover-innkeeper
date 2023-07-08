<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'client_id',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}