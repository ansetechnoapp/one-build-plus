<?php

namespace App\Http\Controllers\dashboard\admin\commentUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class view extends Controller
{
    public function view()
    {
        return view('dashboard.admin.commentUser.view', [
            'issetCommentInfoUser' => $this->Cm->getAllWithUser(),
            'sub_path_admin' => $this->path_manager(4),
        ]);
    }
    public function statutDisable($id){
        $this->Cm->updateStatus('id', $id, 'status', 0);
        return redirect()->route('admin.dashboard.commentUser', [
            'sub_path_admin' => $this->path_manager(1),
        ]);
    }

    public function statutActive($id){
        $this->Cm->updateStatus('id', $id, 'status', 1);
        return redirect()->route('admin.dashboard.commentUser', [
            'sub_path_admin' => $this->path_manager(1),
        ]);
    }
}
