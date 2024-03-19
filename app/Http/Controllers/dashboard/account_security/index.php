<?php

namespace App\Http\Controllers\dashboard\account_security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\auth\reset_password;

class index extends Controller
{
    protected $instanceDeAccount;

    public function __construct(reset_password $instanceDeAccount)
    {
        parent::__construct();
        $this->instanceDeAccount = $instanceDeAccount;
    }
    
    public function accountSecurity($txt1,$path)
    {
        return view($txt1, $path);
    }
    public function gaccountSecurity2()
    {
        return $this->accountSecurity('dashboard.account_security.index',['sub_path_admin' => $this->path_manager(2)]);
    }
    public function UserChangePassword(Request $request)
    {
        return $this->instanceDeAccount->ChangePassword($request,'dashboard.account_security.index','3');
    }
}
