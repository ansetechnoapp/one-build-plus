<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function show()
   {
      return view('about.index', [
         'selectCommment' => $this->Cm->selectCommmentForUserStatutEqualOne(),
         'membersOBP' => $this->Users->findUser('agentOBP','oui',$this->cache_time()),
         'path_manager' => $this->path_manager(0),
      ]);
   }
}
