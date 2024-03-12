<?php

namespace App\Http\Controllers\dashboard\admin\list_agent_obp;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
    public function show()
    {
        return view('dashboard.admin.list_agent_obp.index', ['members' => $this->Users->selectCollection('agentOBP','oui',$this->cache_time()), 
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function  agentOBP_active($id)
    {
        $this->Users->Update_col_User('id',$id,'oui','agentOBP');
       return redirect()->route('admin.memberobp',[
       'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function agentOBP_disable($id)
    {
        $this->Users->Update_col_User('id',$id,'non','agentOBP');
        return redirect()->route('admin.memberobp',[
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
}