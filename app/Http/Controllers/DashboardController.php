<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('admin_dashboard');
        }

        // Default view for users
        return view('dashboard');
    }
    public function home()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('home');
        }

        // Default view for users
        return view('home');
    }
    public function myoffice()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('user.myoffice');
        }

        // Default view for users
        return view('user.myoffice');
    }
    public function fourm()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('admin_fourm');
        }

        // Default view for users
        return view('dashboard');
    }
    public function userProfile()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('user.user_profile');
        }

        // Default view for users
        return view('user.user_profile');
    }
}
