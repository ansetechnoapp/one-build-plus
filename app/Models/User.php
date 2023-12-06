<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
