<?php

namespace App\Http\Controllers\dashboard\admin\send_sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function show()
    {
        
        return view(
            'dashboard.admin.send_sms.index',
            [   
                'sub_path_admin'=>$this->path_manager(1),
            ]
        );
    }
}
