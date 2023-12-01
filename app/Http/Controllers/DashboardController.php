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
    public function fourm()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return view('admin_fourm');
        }

        // Default view for users
        return view('dashboard');
    }
}
