<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use FedaPay\FedaPay;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use App\Notifications\NewResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

trait CreateUser
{
    
    public function createUser($request)
    {
        $user = User::create([
            'lastName' => $request->lastName,
            'firstName' => $request->firstName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return $user;
    }
}
trait SelectUser
{

    public function VerifyUserExist($email)
    {
        if ($email) {
            return User::where('email', $email)->exists();
        } else {
            if (session::get('user_email')) {
                $email = session::get('user_email');
                return User::where('email', $email)->exists();
            } else {
                dd("L'email n'existe pas");
            }
        }
    }
    public function AllInfoUser()
    {
        return User::all();
    }
    public function selectCollection($col,$response)
    {
        return User::where($col, $response)->get();
    }
    public function findUser($col,$data)
    {
         return User::where($col, $data)->first();
    }
}
trait UpdateUser
{
    
    public function Update_col_User($col,$props,$isactive,$update)
    {
        return User::where($col, $props)->update([
            $update => $isactive,
        ]);
    } 
    public function UpdateUser($request,$user_id)
    {
        return User::where('id', $user_id)
        ->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
        ]);
    }
    public function UpdatePasswordUser($user_id,$res)
    {
        return User::findOrFail($user_id)->update([
            'password' => $res,
        ]); 
    }
}
class User extends Authenticatable
{
    use HasApiTokens, HasFactory,Notifiable,CanResetPassword,CreateUser,SelectUser,UpdateUser;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastName',
        'firstName',
        'email',
        'phone',
        'password',
        'birthday',
        'role',
        'isactive',
        'img',
        'agentOBP',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new NewResetPasswordNotification($token));
    }

    public function hasRole(){
        return $this->role === 'admin';
    }
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function additional_option()
    {
        return $this->hasOne(additional_option::class, 'users_id');
    }
    public function devis()
    {
        return $this->hasOne(devis::class, 'users_id');
    }
    public function comment()
    {
        return $this->hasOne(comment::class, 'users_id');
    }
    public function FedaPay()
    {
        return $this->hasOne(FedaPay::class, 'users_id');
    }
}

