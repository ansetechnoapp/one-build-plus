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

// Route::get('/testmodelrequest', [\App\Http\Controllers\Auth\FormRegister::class, 'testmodelrequest']);
Route::get('/all_prod', [\App\Http\Controllers\prod\insert::class, 'show'])->name('all_prod');
Route::post('/search_info_prod', [\App\Http\Controllers\search\prod::class, 'selectsearch'])->name('search.prod');


Route::get('/', [\App\Http\Controllers\search\prod::class, 'allselecttableProdForHome'])->name('home');
Route::get('/faqs', function () {
    return view('faqs.index');
})->name('faqs');
Route::get('/aboutus', function () {
    return view('about.index');
})->name('about');
Route::get('/buy', function () {
    return view('buy.index');
})->name('buy');






Route::post('/login', [\App\Http\Controllers\Auth\FormLogin::class, 'authenticate'])->name('login');

Route::get('/formupdatepassword/{email}', function ($email) {
    return view('forgetpassword.updatepassword', ['email' => $email]);
})->name('formupdatepassword');
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

Route::post('/devis', [\App\Http\Controllers\facture_des_services\devis::class, 'genererDevis'])->name('devis');
Route::get('/emailsendforconfirmationuserregistration', function () {
    return view('emails.emailsendforconfirmationuserregistration');
})->name('url.confirmation.user.registration');

/*
|--------------------------------------------------------------------------
| Web Routes for dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'isActive'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\facture_des_services\devis::class, 'listDevisForUser'])->name('dashboard.home');
    Route::get('/dashboard.account.profil', [\App\Http\Controllers\save\account::class, 'getaccountprofil'])->name('dashboard.profil');
    Route::post('/saveprofilandupdate', [\App\Http\Controllers\save\account::class, 'saveprofilandupdate'])->name('saveprofilandupdate');
    /* Route::get('/dashboard.billing.history', function () {
        return view('dashboard.billing_history.index');
    })->name('dashboard.billing.history'); */
    Route::get('/dashboard.account_security', function () {
        return view('dashboard.account_security.index');
    })->name('dashboard.security');
    Route::match(array('GET', 'POST'),'/ChangePassword', [\App\Http\Controllers\save\account::class, 'ChangePassword'])->name('account.security.ChangePassword');
    Route::post('/save_info_prod', [\App\Http\Controllers\prod\insert::class, 'store'])->name('save.prod');

    Route::match(array('GET', 'POST'), '/dashboard-payment.{id}.{price}', [\App\Http\Controllers\prod\select::class, 'receptiondata1'])->name('dashboard.paymnt');
    Route::post('/dashboard-paymnt', [\App\Http\Controllers\prod\insert::class, 'generateDevisForProperty'])->name('generateDevisForProperty');

    Route::match(array('GET', 'POST'), '/Logout', [\App\Http\Controllers\Auth\Logout::class, 'logout'])->name('Logout');
});

/*
|--------------------------------------------------------------------------
| Web Routes for dashboard for admin
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'isActive', 'admin'])->group(function () {
    Route::get('/dashboard.admin', function () {
        return view('dashboard.admin.home.index');
    })->name('dashboard.admin');
    Route::get('/list_prod', [\App\Http\Controllers\prod\select::class, 'show'])->name('list_prod');
    Route::get('/list_user', [\App\Http\Controllers\Auth\FormLogin::class, 'show_list_user'])->name('list_user');
});
/*
|--------------------------------------------------------------------------
| Web Routes for 
|--------------------------------------------------------------------------
*/
Route::middleware(['guest'])->group(function () {
    Route::get('/auth-login', function () {
        return view('auth-login.index');
    })->name('auth-login');
    Route::get('/sign-up', function () {
        return view('auth-signup.index');
    })->name('sign.up');
    Route::get('/updatePassword', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePassword'])->name('password.update');
    Route::get('/sendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'authrepassword'])->name('auth-re-password');
    Route::post('/updatePasswordSendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePasswordSendEmail'])->name('password.updateSendEmail');
});