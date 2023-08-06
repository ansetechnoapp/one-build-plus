<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/login', [\App\Http\Controllers\Auth\FormLogin::class, 'authenticate'])->name('login');
Route::match(array('GET', 'POST'), '/Logout', [\App\Http\Controllers\Auth\Logout::class, 'logout'])->name('Logout');




Route::get('/well', function () {
    return view('reactJS/reactjs');
});

Route::get('/dashboard', function () {
    return view('dashboard.home.index');
})->name('dashboard.home');
Route::get('/dashboard.account.profil', function () {
    return view('dashboard.profil.index');
})->name('dashboard.profil');
Route::get('/dashboard.billing.history', function () {
    return view('dashboard.billing_history.index');
})->name('dashboard.billing.history');
Route::get('/dashboard.account_security', function () {
    return view('dashboard.account_security.index');
})->name('dashboard.security');

Route::post('/save_info_prod', [\App\Http\Controllers\prod\insert::class, 'store'])->name('save.prod');
Route::get('/all_prod', [\App\Http\Controllers\prod\insert::class, 'show'])->name('all_prod');
Route::post('/search_info_prod', [\App\Http\Controllers\search\prod::class, 'selectsearch'])->name('search.prod');

Route::get('/', [\App\Http\Controllers\search\prod::class, 'selectsearchcommune'])->name('home');
Route::get('/faqs', function () {
    return view('faqs.index');
})->name('faqs');
Route::get('/aboutus', function () {
    return view('about.index');
})->name('about');
Route::get('/buy', function () {
    return view('buy.index');
})->name('buy');
Route::get('/auth-login', function () {
    return view('auth-login.index');
})->name('auth-login');




Route::get('/sendEmail', function () {
    return view('forgetpassword.sendEmail');
})->name('auth-re-password');
Route::post('/updatePasswordSendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePasswordSendEmail'])->name('password.updateSendEmail');

Route::get('/formupdatepassword/{email}', function ($email) {
    return view('forgetpassword.updatepassword', ['email' => $email]);
})->name('formupdatepassword');
Route::get('/updatePassword', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePassword'])->middleware('guest')->name('password.update');



Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/privacy', function () {
    return view('privacy.index');
})->name('privacy');
Route::get('/terms', function () {
    return view('terms.index');
})->name('terms');
Route::get('/grid', function () {
    return view('grid.index');
})->name('grid');
/* ..............................................................................  @other */
Route::get('/property-detail', function () {
    return view('property-detail');
})->name('property_detail');

Route::get('/payment', function () {
    return view('payment.index');
})->name('payment');

Route::get('/list', function () {
    return view('list');
});

Route::get('/features', function () {
    return view('features');
});
Route::get('/auth-signup', function () {
    return view('auth-signup');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});
Route::get('/404', function () {
    return view('404');
});
