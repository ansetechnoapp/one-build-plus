<?php


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

Route::middleware(['guest'])->group(function () {
    Route::get('/auth-login',[\App\Http\Controllers\auth_login\index::class, 'show'])->name('auth-login');

    Route::get('/sign-up', [\App\Http\Controllers\auth_signup\index::class, 'show'])->name('sign.up');
    Route::post('/sign-up-step2', [\App\Http\Controllers\auth_signup\index::class, 'SaveSignupOneStep'])->name('sign.up.step2');
    Route::get('/sendEmail', [\App\Http\Controllers\forgetpassword\sendEmail::class, 'authrepassword'])->name('auth-re-password');
// 
// 
// 
// 
// 
Route::get('/reset-password.{token}.{email}', function (string $token,string $email) {
    return view('auth.reset-password', ['token' => $token,'email' => $email]);
})->name('password.reset');

});