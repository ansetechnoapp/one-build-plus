<?php

namespace App\Http\Controllers\dashboard\account_security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\save\account;

class index extends Controller
{
    protected $instanceDeAccount;

    public function __construct(account $instanceDeAccount)
    {
        parent::__construct();
        $this->instanceDeAccount = $instanceDeAccount;
    }
    
    public function accountSecurity($txt1)
    {
        return view($txt1, ['sub_path_admin' => $this->sub_path_admin()]);
    }
    public function gaccountSecurity2()
    {
        return $this->accountSecurity('dashboard.account_security.index');
    }
    public function UserChangePassword(Request $request)
    {
        return $this->instanceDeAccount->ChangePassword($request,'dashboard.account_security.index');
    }
}