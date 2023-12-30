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
Route::get('/testmodelrequest1', [\App\Http\Controllers\PaymentController::class, 'boot']);
Route::get('/testmodelrequest2', [\App\Http\Controllers\PaymentController::class, 'getApiKeys']);

// Route::get('/testmodelrequest', [\App\Http\Controllers\Auth\FormRegister::class, 'testmodelrequest']);
Route::post('/subscribe', [\App\Http\Controllers\Auth\FormRegister::class, 'subscribe'])->name('subscribe');
Route::get('/all_prod', [\App\Http\Controllers\prod\insert::class, 'show'])->name('all_prod');
Route::post('/search_info_prod', [\App\Http\Controllers\show_all_product\index::class, 'selectsearch'])->name('search.prod');
Route::post('/search.info.prod.location', [\App\Http\Controllers\rent\index::class, 'selectsearch'])->name('search_location');

Route::get('/', [\App\Http\Controllers\home\index::class, 'requestForHome'])->name('home');
Route::get('/faqs', [\App\Http\Controllers\faqs\index::class, 'show'])->name('faqs');
Route::get('/aboutus', [\App\Http\Controllers\about\index::class, 'show'])->name('about');
Route::get('/buy', [\App\Http\Controllers\buy\index::class, 'showbuyallprod'])->name('buy');
Route::get('/rent', [\App\Http\Controllers\rent\index::class, 'showRentallprod'])->name('rent');

Route::post('/login', [\App\Http\Controllers\Auth\FormLogin::class, 'authenticate'])->name('login');

Route::get('/formupdatepassword.{email}', function ($email) {
    return view('forgetpassword.updatepassword', ['email' => $email]);
})->name('formupdatepassword');
Route::get('/emailsendforconfirmationforgetpassword', [\App\Http\Controllers\page_confirm_message\sendforforgetpassword::class, 'view'])->name('url.emails.sendforforgetpassword');

Route::get('/activateaccount/{email}', [\App\Http\Controllers\Auth\FormLogin::class, 'isactive'])->name('activate.account');

Route::match(array('GET', 'POST'), '/auth-signup.{id}.{price}', [\App\Http\Controllers\Auth\FormRegister::class, 'receptiondata'])->name('paymnt');
Route::match(array('GET', 'POST'), '/auth-signup_form', [\App\Http\Controllers\Auth\FormRegister::class, 'receptiondata1'])->name('paymnt.form');
Route::match(array('GET', 'POST'), '/auth_signup_form_2', [\App\Http\Controllers\Auth\FormRegister::class, 'receptiondata2'])->name('paymnt.form2');
/* Route::get('/email-envoyer-pour-confirmation-enregistrement-utilisateur', function () {
    return view('payment.index');
})->name('email.send.for.confirmation.user.registration'); */

Route::post('/sign_up_user_and_prod', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveRegisterUserAndProd'])->name('sign.up.user.and.prod');
Route::post('/signup', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveRegister'])->name('save.user');


Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::post('/contactform', [\App\Http\Controllers\contact\envoiemail::class, 'envoiemail'])->name('form.contact');
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
Route::get('/property-detail', [\App\Http\Controllers\prod\select::class, 'receptiondata'])->name('property_detail');



Route::get('/list', function () {
    return view('list');
});
Route::get('/features', function () {
    return view('features');
});


Route::get('/maintenance', function () {
    return view('maintenance');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/devisview', function () {
    return view('devis.template');
});
Route::post('/devis', [\App\Http\Controllers\facture_des_services\devis::class, 'genererDevis'])->name('devis');
Route::get('/emailsendforconfirmationuserregistration', function () {
    return view('emails.emailsendforconfirmationuserregistration');
})->name('url.confirmation.user.registration');

Route::get('/user_disable', function () {
    return view('user_disable.index');
})->name('view.user.disable');
/*
|--------------------------------------------------------------------------
| Web Routes for dashboard
|--------------------------------------------------------------------------
*/
include('include/all_user_route.php');
/*
|--------------------------------------------------------------------------
| Web Routes for dashboard for admin
|--------------------------------------------------------------------------
*/
include('include/admin_route.php');

/*
|--------------------------------------------------------------------------
| Web Routes for 
|--------------------------------------------------------------------------
*/
include('include/connection_no_Route.php');