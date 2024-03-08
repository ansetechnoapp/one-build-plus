<?php

namespace App\Http\Controllers\dashboard\admin\account_security;

use Illuminate\Http\Request;
use App\Http\Controllers\dashboard\account_security\index as accountSecurity;

class index extends accountSecurity
{
    
    public function admingaccountSecurity()
    {
        return $this->accountSecurity('dashboard.admin.account_security.index');
    }
    public function adminChangePassword(Request $request)
    {
        return $this->instanceDeAccount->ChangePassword($request,'dashboard.admin.account_security.index');
    }
}