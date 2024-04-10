<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private Auth $auth;
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    //get
    public function loginGet()
    {
        if ($this->auth::check()) {
            return redirect()->intended('/');
        }
        return view('login.index');
    }

    //post
    public function loginPost()
    {
        $credentials = request()->only('email', 'password');
        if ($this->auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        $this->auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

}
