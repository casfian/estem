<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{   

    public function index()
    {
        if (Auth::user()->hasRole('superadministrator')) {
            return view('dashboardsuper');
        } elseif (Auth::user()->hasRole('administrator')) {
            return view('dashboardadmin');
        } elseif (Auth::user()->hasRole('user')) {
            return view('dashboarduser');
        } else {
            return 'No Dashboard!';
        }

    }
}
