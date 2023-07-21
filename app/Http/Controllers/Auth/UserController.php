<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    //
    public function login()
    {
        return Inertia::render('UserLogin', [
            'loginPost' => route('user-login.perform'),
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('user-login.show');
    }

    public function authenticate(LoginRequest $request) 
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) {
            return redirect()->route('user-login.show')->withErrors(trans('auth.failed'));
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user, '');
    }

    protected function authenticated(LoginRequest $request, $user, string $page)
    {
        return redirect()->intended();
    }
}
