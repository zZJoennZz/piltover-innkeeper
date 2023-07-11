<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class AppController extends Controller
{
    //
    public function index(): Response
    {
        return Inertia::render('Index');
    }

    public function settings(): Response
    {
        return Inertia::render('Settings');
    }

    public function appointments(): Response
    {
        return Inertia::render('Appointments');
    }
}
