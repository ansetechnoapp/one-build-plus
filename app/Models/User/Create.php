<?php

namespace App\Models\User;

use App\Models\User;

trait Create
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
