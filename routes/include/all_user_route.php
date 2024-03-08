<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'isActive'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\facture_des_services\devis::class, 'listDevisForUser'])->name('dashboard.home');
    Route::get('/dashboard.account.profil', [\App\Http\Controllers\dashboard\profil\index::class, 'getaccountprofil2'])->name('dashboard.profil');
    Route::post('/saveImg', [\App\Http\Controllers\dashboard\profil\index::class, 'saveImage2'])->name('save.profil.img');//...
    Route::post('/saveprofilandupdate', [\App\Http\Controllers\save\account::class, 'Usersaveprofilandupdate'])->name('saveprofilandupdate');//...
    /* Route::get('/dashboard.billing.history', function () {
        return view('dashboard.billing_history.index');
    })->name('dashboard.billing.history'); */
    Route::get('/dashboard.account_security',[\App\Http\Controllers\dashboard\account_security\index::class, 'gaccountSecurity2'])->name('dashboard.security');
    Route::match(array('GET', 'POST'), '/ChangePassword', [\App\Http\Controllers\dashboard\account_security\index::class, 'UserChangePassword'])->name('account.security.ChangePassword');
    Route::match(array('GET', 'POST'), '/dashboard-payment.{id}.{price}', [\App\Http\Controllers\prod\select::class, 'receptiondata1'])->name('dashboard.paymnt');
    Route::post('/dashboard-paymnt', [\App\Http\Controllers\prod\insert::class, 'generateDevisForProperty'])->name('generateDevisForProperty');
    Route::match(array('GET', 'POST'), '/Logout', [\App\Http\Controllers\Auth\Logout::class, 'logout'])->name('Logout');
    Route::match(array('GET', 'POST'), '/comment', [\App\Http\Controllers\dashboard\commentUser\view::class, 'view'])->name('dashboard.commentUser');
    Route::match(array('GET', 'POST'), '/savecomment', [\App\Http\Controllers\dashboard\commentUser\view::class, 'saveComment'])->name('dashboard.save.commentUser');
    Route::match(array('GET', 'POST'), '/update.view.comment.{id}fkldjxllsjkdqsjksk', [\App\Http\Controllers\dashboard\commentUser\update::class, 'affichage'])->name('dashboard.update.view.commentUser');
    Route::match(array('GET', 'POST'), '/updatecomment', [\App\Http\Controllers\dashboard\commentUser\update::class, 'saveComment'])->name('dashboard.update.commentUser');
        

    Route::post('/paymentdevis', [\App\Http\Controllers\dashboard\list_payment\liste::class, 'test'])->name('paymentdevis');
    Route::get('/listepaymentdevis', [\App\Http\Controllers\dashboard\list_payment\liste::class, 'show'])->name('listpaymentpay');
    Route::match(array('GET', 'POST'),'/paymentdevisPageConfirmation', [\App\Http\Controllers\dashboard\list_payment\liste::class, 'confirm'])->name('paymentdevis.PageConfirmation');

});