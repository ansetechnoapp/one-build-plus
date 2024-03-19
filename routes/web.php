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


Route::get('/show_all_product', [\App\Http\Controllers\show_all_product\index::class, 'show'])->name('all_prod');
Route::post('/search_info_prod', [\App\Http\Controllers\show_all_product\index::class, 'selectsearch'])->name('search.prod');
Route::post('/search_info_prod_location', [\App\Http\Controllers\rent\index::class, 'selectsearch'])->name('search.location');

Route::get('/', [\App\Http\Controllers\home\index::class, 'requestForHome'])->name('home');
Route::get('/faqs', [\App\Http\Controllers\faqs\index::class, 'show'])->name('faqs');
Route::get('/about', [\App\Http\Controllers\about\index::class, 'show'])->name('about');
Route::get('/buy', [\App\Http\Controllers\buy\index::class, 'showbuyallprod'])->name('buy');
Route::get('/rent', [\App\Http\Controllers\rent\index::class, 'showRentallprod'])->name('rent');


Route::post('/auth_login', [\App\Http\Controllers\auth_login\index::class, 'authenticate'])->name('login');


Route::get('/emailsendforconfirmationforgetpassword', [\App\Http\Controllers\page_confirm_message\sendforforgetpassword::class, 'view'])->name('url.emails.sendforforgetpassword');

Route::get('/activateaccount/{email}', [\App\Http\Controllers\auth_login\index::class, 'isactive'])->name('activate.account');



Route::match(array('GET', 'POST'),'/auth_signup', [\App\Http\Controllers\auth_signup\index::class, 'index']);
Route::match(array('GET', 'POST'),'/auth_signup/step2', [\App\Http\Controllers\auth_signup\Step2::class, 'index']);
/* Route::get('/email-envoyer-pour-confirmation-enregistrement-utilisateur', function () {
    return view('payment.index');
})->name('email.send.for.confirmation.user.registration'); */

Route::get('/contact', [\App\Http\Controllers\contact\index::class, 'view'])->name('contact');
Route::post('/contactform', [\App\Http\Controllers\contact\index::class, 'envoiemail'])->name('form.contact');


Route::view('/privacy', 'privacy.index')->name('privacy');
Route::view('/terms', 'terms.index')->name('terms');
Route::view('/grid', 'grid.index')->name('grid');

/* ..............................................................................  @other */
Route::get('/property-detail', [\App\Http\Controllers\property_detail\index::class, 'receptiondata'])->name('property_detail');


Route::view('/list', 'list');
Route::view('/features', 'features');
Route::view('/maintenance', 'maintenance');
Route::view('/404', '404');
Route::view('/devisview', 'devis.template');
Route::view('/user_disable', 'user_disable.index')->name('view.user.disable');
Route::view('/emailsendforconfirmationuserregistration', 'emails.emailsendforconfirmationuserregistration')->name('url.confirmation.user.registration');



Route::post('/send/subscribeform', [\App\View\Components\subscribeform::class, 'subscribe'])->name('send.subscribeform');
Route::post('/devis', [\App\Http\Controllers\dashboard\home\index::class, 'genererDevis'])->name('devis');
Route::match(array('GET', 'POST'), '/auth-signup', [\App\Http\Controllers\payment\index::class, 'receptiondata'])->name('paymnt');
Route::match(array('GET', 'POST'), '/auth-signup_form', [\App\Http\Controllers\payment\suite::class, 'receptiondata1'])->name('paymnt.form');
Route::match(array('GET', 'POST'), '/auth_signup_form_2', [\App\Http\Controllers\payment\suite2::class, 'receptiondata2'])->name('paymnt.form2');
Route::match(array('GET', 'POST'), '/form_one', [\App\Http\Controllers\payment\index::class, 'form_one'])->name('form.one');

Route::post('/sign_up_user_and_prod', [\App\Http\Controllers\payment\suite2::class, 'SaveRegisterUserAndProd'])->name('sign.up.user.and.prod');
Route::post('/signup', [\App\Http\Controllers\auth_signup\step2::class, 'SaveRegister'])->name('save.user');


// Route::get('/auth/reset_password', [\App\Http\Controllers\auth\reset_password::class, 'index']);


// Route::get('/auth_signup/w_secondExemplaire', [\App\Http\Controllers\auth_signup\w_secondExemplaire::class, 'index']);
// Route::get('/dashboard/account_security', [\App\Http\Controllers\dashboard\account_security\index::class, 'index']);
// Route::get('/dashboard/admin/account_security', [\App\Http\Controllers\dashboard\admin\account_security\index::class, 'index']);
// Route::get('/dashboard/admin/all_list_pay', [\App\Http\Controllers\dashboard\admin\all_list_pay\index::class, 'index']);

// Route::get('/dashboard/admin/faq_form', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'index']);
// Route::get('/dashboard/admin/faq_form/title', [\App\Http\Controllers\dashboard\admin\faq_form\Title::class, 'index']);
// Route::get('/dashboard/admin/faqs', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'index']);
// Route::get('/dashboard/admin/formhomeslideimage', [\App\Http\Controllers\dashboard\admin\formhomeslideimage\index::class, 'index']);
// Route::get('/dashboard/admin/home/form/step1', [\App\Http\Controllers\dashboard\admin\home\form\Step1::class, 'index']);
// Route::get('/dashboard/admin/home/form/step2', [\App\Http\Controllers\dashboard\admin\home\form\Step2::class, 'index']);
// Route::get('/dashboard/admin/home/form/step3', [\App\Http\Controllers\dashboard\admin\home\form\Step3::class, 'index']);
// Route::get('/dashboard/admin/list_agent_obp', [\App\Http\Controllers\dashboard\admin\list_agent_obp\index::class, 'index']);



// Route::get('/dashboard/admin/list_user', [\App\Http\Controllers\dashboard\admin\list_user\index::class, 'index']);
// Route::get('/dashboard/admin/profil', [\App\Http\Controllers\dashboard\admin\profil\index::class, 'index']);
// Route::get('/dashboard/admin/Rental_management/form/step1', [\App\Http\Controllers\dashboard\admin\Rental_management\form\Step1::class, 'index']);
// Route::get('/dashboard/admin/Rental_management/form/step2', [\App\Http\Controllers\dashboard\admin\Rental_management\form\Step2::class, 'index']);
// Route::get('/dashboard/admin/Rental_management/form/step3', [\App\Http\Controllers\dashboard\admin\Rental_management\form\Step3::class, 'index']);

// Route::get('/dashboard/admin/send_sms', [\App\Http\Controllers\dashboard\admin\send_sms\index::class, 'index']);
// Route::get('/dashboard/billing_history', [\App\Http\Controllers\dashboard\billing_history\index::class, 'index']);

// Route::get('/dashboard/home', [\App\Http\Controllers\dashboard\home\index::class, 'index']);
// Route::get('/dashboard/list_payment/liste', [\App\Http\Controllers\dashboard\list_payment\Liste::class, 'index']);
// Route::get('/dashboard/payment', [\App\Http\Controllers\dashboard\payment\index::class, 'index']);
// Route::get('/dashboard/profil', [\App\Http\Controllers\dashboard\profil\index::class, 'index']);
// Route::get('/devis', [\App\Http\Controllers\devis\index::class, 'index']);
// Route::get('/devis/template', [\App\Http\Controllers\devis\Template::class, 'index']);
// Route::get('/emails/contact', [\App\Http\Controllers\emails\Contact::class, 'index']);
// Route::get('/emails/sendregisteruser', [\App\Http\Controllers\emails\SendRegisterUser::class, 'index']);
// Route::get('/forgetpassword/sendEmail', [\App\Http\Controllers\forgetpassword\SendEmail::class, 'index']);
// Route::get('/page_confirm_message/confirme_updateforgetpassword', [\App\Http\Controllers\page_confirm_message\confirme_updateforgetpassword::class, 'index']);
// Route::get('/page_confirm_message/sendforforgetpassword', [\App\Http\Controllers\page_confirm_message\SendForForgetPassword::class, 'index']);
// Route::get('/payment', [\App\Http\Controllers\payment\index::class, 'index']);
// Route::get('/payment/suite', [\App\Http\Controllers\payment\Suite::class, 'index']);
// Route::get('/payment/suite2', [\App\Http\Controllers\payment\Suite2::class, 'index']);


// Route::get('/search', [\App\Http\Controllers\search\index::class, 'index']);
// Route::get('/sell', [\App\Http\Controllers\sell\index::class, 'index']);

// Route::get('/show_prod_location', [\App\Http\Controllers\show_prod_location\index::class, 'index']);

// Route::get('/user_disable', [\App\Http\Controllers\user_disable\index::class, 'index']);

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
