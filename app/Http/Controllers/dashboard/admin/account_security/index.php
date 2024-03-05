<?php

namespace App\Http\Controllers\dashboard\admin\account_security;

use App\Http\Controllers\dashboard\account_security\index as accountSecurity;

class index extends accountSecurity
{
    public function admingaccountSecurity()
    {
        return $this->accountSecurity('dashboard.admin.account_security.index');
    }
}
