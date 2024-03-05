<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment\Create;
use App\Models\Comment\Select;
use App\Models\Comment\Update;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory,Select,Create,Update;
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
