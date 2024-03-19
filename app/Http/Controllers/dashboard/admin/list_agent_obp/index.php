<?php

namespace App\Http\Controllers\dashboard\admin\list_agent_obp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function show()
    {
        return view('dashboard.admin.list_agent_obp.index', ['members' => $this->Users->findUser('agentOBP','oui',$this->cache_time()), 
        'sub_path_admin'=>$this->path_manager(1),]);
    }
    public function  agentOBP_active($id)
    {
        $this->Users->Update_col_User('id',$id,'oui','agentOBP');
       return $this->show();
    }
    public function agentOBP_disable($id)
    {
        $this->Users->Update_col_User('id',$id,'non','agentOBP');
        return $this->show();
    }
}
