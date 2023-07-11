<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    //
    public function login()
    {
        return Inertia::render('UserLogin');
    }
}
