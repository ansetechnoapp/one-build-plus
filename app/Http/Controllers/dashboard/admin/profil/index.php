<?php

namespace App\Http\Controllers\dashboard\admin\profil;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\dashboard\profil\index as accountprofil;

class index extends accountprofil
{

    public function admingetaccountprofil()
    {
        return $this->getaccountprofil('dashboard.admin.profil.index');
    }
    public function adminsaveImage(Request $request, User $user)
    {
        return $this->saveImage($request,'admin.dashboard.profil',$user);
    }
    public function adminsaveprofilandupdate(Request $request)
    {
        return $this->saveprofilandupdate($request,'admin.dashboard.profil');
    }
    
}
