<?php

namespace App\Http\Controllers;

use App\Models\Guidian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request) 
    {
        return view("auth/register");
    }
    public function registerSave(Request $request) {
        Validator::make($request->all(), [
            "firstname"=> "required",
            "lastname"=> "required",
            "email"=> "required|email",
            "password"=> "required|confirmed",
            "user_type"=> "required"
            ])->validate();

            User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' =>  $request->user_type,
            ]);  return redirect()->route('/')->with('success','');
          
    }

    public function login()
    {

    
        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
  
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
  
        $request->session()->regenerate();
        if(Auth::user()->user_type == 1) 
        {
            return redirect()->route('admin/dashboard');
        }
        else if (Auth::user()->user_type == 2) 
        {
            return redirect()->route('sponsor/dashboard');
        }
        else if (Auth::user()->user_type == 3) 
        {
            $profile = Guidian::all();
            return redirect()->route('guidian/dashboard' , compact('profile'));
        }
        
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }
    public function profile()
    {
        return view('auth.profile');
    }
 
    public function settings()
    {
        return view('settings');
    }
    public function guidian()
    {
        return view('guidian.index');
    }
 
  
}
