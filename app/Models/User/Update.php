<?php

namespace App\Models\User;

use App\Models\User;

trait Update
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
