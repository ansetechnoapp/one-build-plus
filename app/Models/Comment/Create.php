<?php

namespace App\Models\Comment;

use App\Models\Comment;

trait Create
{
    

    public function createComment($request,$users_id)
    {
        if ($this->selectCommment('users_id',$users_id) !== null) {
            $comment = $this->selectCommment('id',$request->commentId);
            $comment->Message = $request->message;
            $comment->save();
        } else {
            $comment = new Comment();
            $comment->Message = $request->message;
            $comment->users_id = $users_id;
            $comment->save();
        }
    }
}
