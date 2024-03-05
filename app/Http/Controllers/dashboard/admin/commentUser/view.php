<?php

namespace App\Http\Controllers\dashboard\admin\commentUser;

use App\Models\User;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class view extends Controller
{
    public function view()
    {
        return view('dashboard.admin.commentUser.view', ['issetCommentInfoUser' => $this->Cm->selectCommmentWithUser(),
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function statutDisable($id){
        $this->Cm->UpdateCommmentForCol('id',$id,'Statut','0');
        return redirect()->route('admin.dashboard.admin.commentUser',[
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function statutActive($id){
        $this->Cm->UpdateCommmentForCol('id',$id,'Statut','1');
        return redirect()->route('admin.dashboard.admin.commentUser',[
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
}
