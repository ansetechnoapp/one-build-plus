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






Route::post('/login', [\App\Http\Controllers\Auth\FormLogin::class, 'authenticate'])->name('login');
Route::middleware(['guest'])->group(function () {
    Route::get('/auth-login', function () {
        return view('auth-login.index');
    })->name('auth-login');
    Route::get('/updatePassword', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePassword'])->name('password.update');
});
Route::get('/formupdatepassword/{email}', function ($email) {
    return view('forgetpassword.updatepassword', ['email' => $email]);
})->name('formupdatepassword');
Route::get('/sendEmail', function () {
    return view('forgetpassword.sendEmail');
})->name('auth-re-password');
Route::post('/updatePasswordSendEmail', [\App\Http\Controllers\Auth\resetpassword::class, 'updatePasswordSendEmail'])->name('password.updateSendEmail');
Route::get('/activateaccount/{email}', [\App\Http\Controllers\Auth\FormLogin::class, 'isactive'])->name('activate.account');





Route::get('/auth-signup', function () {
    return view('payment.index');
})->name('payment');

Route::get('/email-envoyer-pour-confirmation-enregistrement-utilisateur', function () {
    return view('payment.index');
})->name('email.send.for.confirmation.user.registration');

Route::post('/signup', [\App\Http\Controllers\Auth\FormRegister::class, 'SaveRegister'])->name('sign.up');

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
    return view('property-detail.index');
})->name('property_detail');



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

Route::get('/devis', [\App\Http\Controllers\facture_des_services\devis::class, 'genererDevis'])->name('devis');
Route::get('/emailsendforconfirmationuserregistration', function () {
    return view('emails.emailsendforconfirmationuserregistration');
})->name('url.confirmation.user.registration');

/*
|--------------------------------------------------------------------------
| Web Routes for dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','isActive'])->group(function () { 
    Route::get('/dashboard', function () {
        return view('dashboard.home.index');
    })->name('dashboard.home');
    Route::get('/dashboard.account.profil', [\App\Http\Controllers\save\account::class, 'getaccountprofil'])->name('dashboard.profil');
    Route::post('/saveprofilandupdate', [\App\Http\Controllers\save\account::class, 'saveprofilandupdate'])->name('saveprofilandupdate');
    Route::get('/dashboard.billing.history', function () {
        return view('dashboard.billing_history.index');
    })->name('dashboard.billing.history');
    Route::get('/dashboard.account_security', function () {
        return view('dashboard.account_security.index');
    })->name('dashboard.security');
    Route::post('/ChangePassword', [\App\Http\Controllers\save\account::class, 'ChangePassword'])->name('account.security.ChangePassword');
    Route::post('/save_info_prod', [\App\Http\Controllers\prod\insert::class, 'store'])->name('save.prod');
    Route::match(array('GET', 'POST'), '/Logout', [\App\Http\Controllers\Auth\Logout::class, 'logout'])->name('Logout');
});

/*
|--------------------------------------------------------------------------
| Web Routes for dashboard for admin
|--------------------------------------------------------------------------
*/
Route::middleware(['admin','isActive'])->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin.home.index');
    })->name('dashboard.admin');
});
