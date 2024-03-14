<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

use function Laravel\Prompts\error;

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
                return redirect()->intended('admin/dashboard_admin');
            }else{
                return redirect()->intended('dashboard');
            }
            
        }
        
        return back()->withErrors([
            'email' => 'Entrer votre email',
        ])->onlyInput('email');
    }

    public function show_list_user(){
        
        $posts = $this->Users->AllInfoUser($this->cache_time());
        return view('dashboard.admin.list_user.index', ['alluser' => $posts,
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }

    public function isactive($email){
        $isactive = '1';
        if ($this->Users->VerifyUserExist($email,$this->cache_time())) {
            $this->Users-> Update_col_User('email',$email,$isactive,'isactive');
            return redirect()->route('auth-login');
        }
    }
}