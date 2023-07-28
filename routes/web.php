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
Route::get('/well', function () {
    return view('reactJS/reactjs');
});
Route::get('/', function () {
    return view('home.index');
})->name('home');
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
Route::get('/auth-re-password', function () {
    return view('forgetpassword.index');
})->name('auth-re-password');
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
});
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
