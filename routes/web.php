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
    return view('index');
});
Route::get('/buy', function () {
    return view('buy');
});
Route::get('/property-detail', function () {
    return view('property-detail');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/grid', function () {
    return view('grid');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/auth-login', function () {
    return view('auth-login');
});
Route::get('/auth-signup', function () {
    return view('auth-signup');
});
Route::get('/auth-re-password', function () {
    return view('auth-re-password');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/maintenance', function () {
    return view('maintenance');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/contact', function () {
    return view('contact');
});