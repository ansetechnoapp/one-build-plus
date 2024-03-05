<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Support\Facades\Session;

trait Select
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