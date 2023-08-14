<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FormLogin extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin'){
                return redirect()->intended('dashboard.admin');
            }else{
                return redirect()->intended('dashboard');
            }
            
            
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function isactive($email){

        $isactive = '1';
        if (User::where('email', $email)->first() !== null) {
            User::where('email', $email)->first()->update([
                'isactive' => $isactive,
            ]);
            return redirect()->route('auth-login');
        }
    }
}