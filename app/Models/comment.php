<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'message',
        'status',
        'users_id',
    ];

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Create or update a comment from request data.
     */
    public static function createOrUpdateFromRequest($request, $userId)
    {
        $comment = self::where('users_id', $userId)->first();

        if ($comment) {
            $comment->message = $request->message;
            $comment->save();
        } else {
            $comment = new self();
            $comment->message = $request->message;
            $comment->users_id = $userId;
            $comment->save();
        }

        return $comment;
    }

    /**
     * Get approved comments with user data.
     */
    public static function getApprovedWithUser()
    {
        return self::where('status', 1)->with('user')->get();
    }

    /**
     * Find a comment by column and value.
     */
    public static function findByColumn($column, $value)
    {
        return self::where($column, $value)->first();
    }

    /**
     * Get all comments with user data.
     */
    public static function getAllWithUser()
    {
        return self::with('user')->get();
    }

    /**
     * Update comment status.
     */
    public static function updateStatus($column, $value, $status, $newValue)
    {
        return self::where($column, $value)->update([
            $status => $newValue,
        ]);
    }

    /**
     * Get comments with status equal to 1 and include user data.
     */
    public function selectCommmentForUserStatutEqualOne()
    {
        return $this->where('status', 1)->with('user')->get();
    }
}
