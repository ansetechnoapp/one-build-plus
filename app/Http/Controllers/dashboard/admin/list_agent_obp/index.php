<?php

namespace App\Http\Controllers\dashboard\admin\list_agent_obp;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
    public function show()
    {
        return view('dashboard.admin.list_agent_obp.index', ['members' => User::where('agentOBP', 'oui')->get()]);
    }
    public function  agentOBP_active($id)
    {
        User::where('id', $id)->update(['agentOBP' => 'oui']);
       return redirect()->route('memberobp');
    }
    public function agentOBP_disable($id)
    {
        User::where('id', $id)->update(['agentOBP' => 'non']);
        return redirect()->route('memberobp');
    }
}
