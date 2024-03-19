<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class title extends Controller
{
    public function view()
    {
        return view('dashboard.admin.faq_form.title',[
        'sub_path_admin'=>$this->path_manager(1),]);
    }
}
