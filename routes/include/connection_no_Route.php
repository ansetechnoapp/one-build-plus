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
Route::get('/reset-password.{token}.{email}', function (string $token,string $email) {
    return view('auth.reset-password', ['token' => $token,'email' => $email]);
})->name('password.reset');


Route::post('/reset-password', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePassword'])->name('password.update');
});