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
        $issetcomment = comment::with('user')->get();
        return view('dashboard.admin.commentUser.view', ['issetCommentInfoUser' => $issetcomment]);
    }
    public function statutDisable($id){
        comment::where('id', $id)->update([
            'Statut' => '0',
        ]);
        return redirect()->to('/admin.comment');
    }
    public function statutActive($id){
        comment::where('id', $id)->update([
            'Statut' => '1',
        ]);
        return redirect()->to('/admin.comment');
    }
}
