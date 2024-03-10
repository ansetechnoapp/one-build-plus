<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CreateCommt
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

trait SelectCommt
{

    public function selectCommmentForUserStatutEqualOne()
    { 
        return Comment::where('Statut', '1')->with('user')->get();
    }
    public function selectCommment($col,$id)
    { 
        return Comment::where($col, $id)->first();  
    }
    public function selectCommmentWithUser()
    { 
        return Comment::with('user')->get();  
    }
}

trait UpdateCommt
{

    public function UpdateCommmentForCol($col, $enter, $Statut, $value)
    {
        return Comment::where($col, $enter)->update([
            $Statut => $value,
        ]);
    }
}

class Comment extends Model
{
    use HasFactory,CreateCommt,SelectCommt,UpdateCommt;
    protected $table = 'comment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Message',
        'users_id',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'users_id');
    }
}
