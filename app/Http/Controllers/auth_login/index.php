<?php

namespace App\Http\Controllers\auth_login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class index extends Controller
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
                return redirect()->intended('admin/dashboard_admin');
            }else{
                return redirect()->intended('dashboard');
            }
            
        }
        
        return back()->withErrors([
            'email' => 'Entrer votre email',
        ])->onlyInput('email');
    }
    public function isactive($email){
        $isactive = '1';
        if ($this->Users->VerifyUserExist($email,$this->cache_time())) {
            $this->Users-> Update_col_User('email',$email,$isactive,'isactive');
            return redirect()->route('auth-login');
        }
    }
    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
public function show () {
    return view('auth-login.index',['path_manager' => $this->path_manager(0),]);
}
}
