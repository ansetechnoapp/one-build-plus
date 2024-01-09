<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\sendpasswordreset;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\ValidationException;

class resetpassword extends Controller
{
    public function updatePasswordSendEmail(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email']);
            $status = Password::sendResetLink(
                $request->only('email')
            );
            return $status === Password::RESET_LINK_SENT
                ? redirect()->route('url.emails.sendforforgetpassword', ['email' => $request->email])
                : back()->withErrors(['email' => __($status)]);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->to('/sendEmail')->withErrors($errors);
        }
    }
    public function updatePassword(Request $request)
    {

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? view('page_confirm_message.confirme_updateforgetpassword')
            : back()->withErrors(['email' => [__($status)]]);
    }
    public function authrepassword(Request $request)
    {
        $parm1 = $request->parm1;
        return view('forgetpassword.sendEmail', ['parm1' => $parm1]);
    }
}
