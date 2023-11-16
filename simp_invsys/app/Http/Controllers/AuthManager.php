<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthManager extends Controller
{

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
