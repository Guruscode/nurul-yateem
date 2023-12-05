<?php

namespace App\Http\Controllers;

use App\Models\Guidian;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function dashboard () {
        if(Auth::user()->user_type == 1) 
        {
            return view('admin.dashboard');
        }
        else if (Auth::user()->user_type == 2) 
        {
            return view('sponsor.dashboard');
        }
        else if (Auth::user()->user_type == 3) 
        {
            $profile = Guidian::all();
            return view('guidian.dashboard', compact( 'profile'));
        }
    }
}
