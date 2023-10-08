<?php

namespace App\Http\Controllers\dashboard\commentUser;

use App\Models\User;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class view extends Controller
{
    public function view()
    {
        $issetcomment = comment::where('users_id', Auth::user()->id);
        $infoUser = User::where('id', Auth::user()->id)->first();
        $issetcomment = $issetcomment->first();
        return view('dashboard.commentUser.view', ['issetcomment' => $issetcomment, 'infoUser' => $infoUser]);
    }

    public function saveComment(Request $request)
    {
        $profession = $request->profession;
        $message = $request->message;
        $commentId = $request->commentId;
        if (isset($profession) && isset($message)) {
            $rules = [
                'profession' => ['required', 'string', 'max:100', 'min:2'],
                'message' => ['required', 'string', 'max:100', 'min:2'],
            ];
            $messages = [
                'profession.errorProfession' => "L'adresse email n'est pas valide.",
                'message.errorMessage' => 'Le mot de passe doit contenir au moins 8 caractères.',
            ];
            $customAttributes = [
                'errorProfession' => 'Adresse email',
                'errorMessage' => 'mot de passe',
            ];
            try {
                $request->validate($rules, $messages, $customAttributes);
                if (User::where('id', Auth::user()->id)->first() !== null) {
                    User::where('id', Auth::user()->id)->update([
                        'Profession' => $profession,
                    ]);
                    if (comment::where('users_id', Auth::user()->id)->first() !== null) {
                        $comment = Comment::find($commentId);
                        $comment->Message = $message;
                        $comment->save();
                    } else {
                        $comment = new Comment();
                        $comment->Message = $message;
                        $comment->users_id = Auth::user()->id;
                        $comment->save();
                    }
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
