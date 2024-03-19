<?php

namespace App\Http\Controllers\dashboard\admin\list_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function show_list_user(){
        
        $posts = $this->Users->AllInfoUser($this->cache_time());
        return view('dashboard.admin.list_user.index', ['alluser' => $posts,
        'sub_path_admin'=>$this->path_manager(1),]);
    }
    public function userDisable($user_id)
    {
        $isactive = '2';
        $this->Users->Update_col_User('id', $user_id, $isactive, 'isactive');
        return redirect()->route('admin.list_user');
    }
    public function userActivate($user_id)
    {
        $isactive = '1';
        $this->Users->Update_col_User('id', $user_id, $isactive, 'isactive');
        return redirect()->route('admin.list_user');
    }
}
