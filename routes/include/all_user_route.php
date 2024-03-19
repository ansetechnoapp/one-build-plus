<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'isActive'])->group(function () {
    Route::get('/dashboard/account/profil', [\App\Http\Controllers\dashboard\profil\index::class, 'getaccountprofil2'])->name('dashboard.profil');
    Route::post('/dashboard/account/profil/saveImg', [\App\Http\Controllers\dashboard\profil\index::class, 'saveImage2'])->name('save.profil.img');
    Route::post('/dashboard/account/profil/saveandupdate', [\App\Http\Controllers\dashboard\profil\index::class, 'Usersaveprofilandupdate'])->name('saveprofilandupdate');

    Route::get('/dashboard/account/security',[\App\Http\Controllers\dashboard\account_security\index::class, 'gaccountSecurity2'])->name('dashboard.security');
    Route::match(array('GET', 'POST'), '/dashboard/account/security/ChangePassword', [\App\Http\Controllers\dashboard\account_security\index::class, 'UserChangePassword'])->name('account.security.ChangePassword');



    Route::match(array('GET', 'POST'), '/dashboard/comment/User', [\App\Http\Controllers\dashboard\commentUser\view::class, 'view'])->name('dashboard.commentUser');
    Route::match(array('GET', 'POST'), '/dashboard/comment/User/save', [\App\Http\Controllers\dashboard\commentUser\view::class, 'SaveOrUpdate'])->name('dashboard.save.commentUser');
    Route::match(array('GET', 'POST'), '/dashboard/comment/User/update', [\App\Http\Controllers\dashboard\commentUser\update::class, 'SaveOrUpdate'])->name('dashboard.update.commentUser');
    Route::match(array('GET', 'POST'), '/dashboard/comment/User/update/{id}', [\App\Http\Controllers\dashboard\commentUser\update::class, 'affichage'])->name('dashboard.update.view.commentUser');
        

    Route::get('/paymentdevis', [\App\Http\Controllers\dashboard\list_payment\liste::class, 'show2'])->name('listpaymentpay');
    Route::post('/paymentdevis/save', [\App\Http\Controllers\dashboard\list_payment\liste::class, 'payfedapay'])->name('paymentdevis');
    Route::match(array('GET', 'POST'),'/paymentdevis/pageConfirmation', [\App\Http\Controllers\dashboard\list_payment\liste::class, 'confirm'])->name('paymentdevis.PageConfirmation');


    Route::match(array('GET', 'POST'), '/Logout', [\App\Http\Controllers\auth_login\index::class, 'logout'])->name('Logout');

    Route::match(array('GET', 'POST'), '/dashboard-payment.{id}.{price}', [\App\Http\Controllers\property_detail\index::class, 'receptiondata1'])->name('dashboard.paymnt');
    Route::post('/dashboard-paymnt', [\App\Http\Controllers\dashboard\payment\index::class, 'generateDevisForProperty'])->name('generateDevisForProperty');

    Route::get('/dashboard', [\App\Http\Controllers\dashboard\home\index::class, 'listDevisForUser'])->name('dashboard.home');

});