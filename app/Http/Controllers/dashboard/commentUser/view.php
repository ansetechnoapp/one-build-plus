<?php

namespace App\Http\Controllers\dashboard\commentUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class view extends Controller
{
    public function view()
    {
        $issetcomment = $this->Cm->findByColumn('users_id', Auth::user()->id);
        $infoUser = $this->Users->findUser('id', Auth::user()->id, $this->cache_time());
        return view('dashboard.commentUser.view', [
            'issetcomment' => $issetcomment,
            'infoUser' => $infoUser,
            'sub_path_admin' => $this->path_manager(2),
        ]);
    }
    public function SaveOrUpdate(Request $request)
    {
        $profession = $request->profession;
        $message = $request->message;
        if (isset($profession) && isset($message)) {
            $rules = [
                'profession' => ['required', 'string', 'max:100', 'min:2'],
                'message' => ['required', 'string', 'max:100', 'min:2'],
            ];
            $messages = [
                'profession.errorProfession' => "L'adresse email n'est pas valide.",
                'message.errorMessage' => 'Le mot de passe doit contenir au moins 8 caractères.',
            ];
            try {
                $request->validate($rules, $messages);
                $userData = $this->Users->findUser('id',Auth::user()->id,$this->cache_time());
                if ($userData['user'] !== null) {
                    $this->Users-> Update_col_User('id',Auth::user()->id,$profession,'Profession');
                     $this->Cm->createComment($request,Auth::user()->id);
                    return redirect()->route('dashboard.commentUser');
                }
            } catch (ValidationException $e) {
                $errors = $e->validator->errors();
                return redirect()->to('/comment')->withErrors($errors);
            }
        } else {
            return redirect()->route('dashboard.commentUser'/* , ['id' => $prod_id] */);
        }
    }
}
