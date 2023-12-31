<?php


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

Route::middleware(['guest'])->group(function () {
    Route::get('/auth-login', function () {
        return view('auth-login.index');
    })->name('auth-login');

    Route::get('/sign-up', function () {
        return view('auth-signup.index');
    })->name('sign.up');
    Route::post('/sign-up-step2', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveSignupOneStep'])->name('sign.up.step2');

    Route::get('/sendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'authrepassword'])->name('auth-re-password');
    Route::post('/forgot-password', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePasswordSendEmail'])->name('password.email');

// 
// 
// 
// 
// 
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');


// Route::match(array('GET', 'POST'),'/updatePassword', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePassword'])->name('password.update');
Route::post('/reset-password', function (Request $request) {
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
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');
});