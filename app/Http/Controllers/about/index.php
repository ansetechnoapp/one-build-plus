<?php

namespace App\Http\Controllers\about;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class index extends Controller
{
   
   public function show()
   {
      return view('about.index', [
         'selectCommment' => $this->Cm->selectCommmentForUserStatutEqualOne(),
         'membersOBP' => $this->Users->selectCollection('agentOBP','oui'),
      ]);
   }
}