<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/auth-login', function () {
        return view('auth-login.index');
    })->name('auth-login');

    Route::get('/sign-up', function () {
        return view('auth-signup.index');
    })->name('sign.up');
    Route::post('/sign-up-step2', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveSignupOneStep'])->name('sign.up.step2');

    Route::match(array('GET', 'POST'),'/updatePassword', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePassword'])->name('password.update');
    Route::get('/sendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'authrepassword'])->name('auth-re-password');
    Route::post('/updatePasswordSendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePasswordSendEmail'])->name('password.updateSendEmail');
});