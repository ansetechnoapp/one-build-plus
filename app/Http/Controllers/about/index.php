<?php

namespace App\Http\Controllers\about;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
   public function show(){
    $selectCommment = $this->selectCommmentForUserStatutEqualOne();
    return view('about.index', [
        'selectCommment' => $selectCommment,
        'membersOBP' => User::where('agentOBP','oui')->get(),]);
   }
}
