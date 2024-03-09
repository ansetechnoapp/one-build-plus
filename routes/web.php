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


Route::view('/well', 'reactJS/reactjs');

Route::get('/testmodelrequest1', [\App\Http\Controllers\PaymentController::class, 'boot']);
Route::get('/testmodelrequest2', [\App\Http\Controllers\PaymentController::class, 'getApiKeys']);

// Route::get('/testmodelrequest', [\App\Http\Controllers\Auth\FormRegister::class, 'testmodelrequest']);
Route::post('/subscribe', [\App\Http\Controllers\Auth\FormRegister::class, 'subscribe'])->name('subscribe');
Route::get('/all_prod', [\App\Http\Controllers\prod\insert::class, 'show'])->name('all_prod');
Route::post('/search_info_prod', [\App\Http\Controllers\show_all_product\index::class, 'selectsearch'])->name('search.prod');
Route::post('/search_info_prod_location', [\App\Http\Controllers\rent\index::class, 'selectsearch'])->name('search.location');

Route::get('/', [\App\Http\Controllers\home\index::class, 'requestForHome'])->name('home');
Route::get('/faqs', [\App\Http\Controllers\faqs\index::class, 'show'])->name('faqs');
Route::get('/aboutus', [\App\Http\Controllers\about\index::class, 'show'])->name('about');
Route::get('/buy', [\App\Http\Controllers\buy\index::class, 'showbuyallprod'])->name('buy');
Route::get('/rent', [\App\Http\Controllers\rent\index::class, 'showRentallprod'])->name('rent');

Route::post('/login', [\App\Http\Controllers\Auth\FormLogin::class, 'authenticate'])->name('login');


Route::get('/emailsendforconfirmationforgetpassword', [\App\Http\Controllers\page_confirm_message\sendforforgetpassword::class, 'view'])->name('url.emails.sendforforgetpassword');

Route::get('/activateaccount/{email}', [\App\Http\Controllers\Auth\FormLogin::class, 'isactive'])->name('activate.account');

Route::match(array('GET', 'POST'), '/auth-signup', [\App\Http\Controllers\Auth\FormRegister::class, 'receptiondata'])->name('paymnt');
Route::match(array('GET', 'POST'), '/auth-signup_form', [\App\Http\Controllers\Auth\FormRegister::class, 'receptiondata1'])->name('paymnt.form');
Route::match(array('GET', 'POST'), '/auth_signup_form_2', [\App\Http\Controllers\Auth\FormRegister::class, 'receptiondata2'])->name('paymnt.form2');
Route::match(array('GET', 'POST'), '/form_one', [\App\Http\Controllers\Auth\FormRegister::class, 'form_one'])->name('form.one');
/* Route::get('/email-envoyer-pour-confirmation-enregistrement-utilisateur', function () {
    return view('payment.index');
})->name('email.send.for.confirmation.user.registration'); */

Route::post('/sign_up_user_and_prod', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveRegisterUserAndProd'])->name('sign.up.user.and.prod');
Route::post('/signup', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveRegister'])->name('save.user');


Route::view('/contact', 'contact.index')->name('contact');

Route::post('/contactform', [\App\Http\Controllers\contact\envoiemail::class, 'envoiemail'])->name('form.contact');
Route::view('/privacy', 'privacy.index')->name('privacy');
Route::view('/terms', 'terms.index')->name('terms');
Route::view('/grid', 'grid.index')->name('grid');

/* ..............................................................................  @other */
Route::get('/property-detail', [\App\Http\Controllers\prod\select::class, 'receptiondata'])->name('property_detail');


Route::view('/list', 'list');
Route::view('/features', 'features');
Route::view('/maintenance', 'maintenance');
Route::view('/404', '404');
Route::view('/devisview', 'devis.template');
Route::view('/user_disable', 'user_disable.index')->name('view.user.disable');
Route::view('/emailsendforconfirmationuserregistration', 'emails.emailsendforconfirmationuserregistration')->name('url.confirmation.user.registration');



Route::post('/devis', [\App\Http\Controllers\facture_des_services\devis::class, 'genererDevis'])->name('devis');


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
