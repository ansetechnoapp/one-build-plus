<?php

namespace App\Http\Controllers\dashboard\account_security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function accountSecurity($txt1)
    {
        return view($txt1, ['sub_path_admin' => $this->sub_path_admin()]);
    }
    public function gaccountSecurity2()
    {
        return $this->accountSecurity('dashboard.account_security.index');
    }
}