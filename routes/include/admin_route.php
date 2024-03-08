<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth', 'isActive', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/form_send_sms', [\App\Http\Controllers\dashboard\admin\send_sms\index::class, 'show'])->name('form.send.sms');
    Route::get('/list_prod{num?}', [\App\Http\Controllers\prod\select::class, 'show'])->name('list_prod');
    Route::get('/list_Allprod', [\App\Http\Controllers\prod\select::class, 'showAllProduct'])->name('list.Allprod');
    Route::get('/list_Rental_management_Allprod', [\App\Http\Controllers\dashboard\admin\Rental_management\list_prod::class, 'showAllProductRental'])->name('list.RentalManagement.Allprod');
    Route::get('/list_user', [\App\Http\Controllers\Auth\FormLogin::class, 'show_list_user'])->name('list_user');
    
    Route::get('/user_disable{user_id}', [\App\Http\Controllers\save\account::class, 'userDisable'])->name('user.disable');
    Route::get('/user_activate{user_id}', [\App\Http\Controllers\save\account::class, 'userActivate'])->name('user.activate');
    Route::match(array('GET', 'POST'), '/commentShow', [\App\Http\Controllers\dashboard\admin\commentUser\view::class, 'view'])->name('dashboard.admin.commentUser');
    Route::match(array('GET', 'POST'), '/comment.update.statut.disable{id}', [\App\Http\Controllers\dashboard\admin\commentUser\view::class, 'statutDisable'])->name('comment.update.statut.disable');
    Route::match(array('GET', 'POST'), '/comment.update.statut.active{id}', [\App\Http\Controllers\dashboard\admin\commentUser\view::class, 'statutActive'])->name('comment.update.statut.active');
    Route::get('/Rental.management.list_prod', [\App\Http\Controllers\dashboard\admin\Rental_management\list_prod::class, 'show'])->name('Rental.management.list.prod');

    Route::get('/faq.form', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'view'])->name('faq_form');
    Route::get('/faq.title.form', [\App\Http\Controllers\dashboard\admin\faq_form\title::class, 'view'])->name('faq_title_form');
    Route::post('/save.form.faq', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'save'])->name('save_form_faq');

    Route::get('/delete.faq.{id}', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'deleteforfaq'])->name('delete_faq');
    Route::get('/delete.title.faq.{id}', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'deleteforfaqtitle'])->name('delete_title_faq');

    Route::post('/save.form.title.faq', [\App\Http\Controllers\dashboard\admin\faq_form\title::class, 'save'])->name('save_form_title_faq');
    Route::get('/faqs', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'show'])->name('faqs.admin');
    Route::get('/faqsUpdate_title.{id}', [\App\Http\Controllers\dashboard\admin\faq_form\title::class, 'showid'])->name('faqsUpdate.title');
    Route::post('/Updatesavefaqs_title', [\App\Http\Controllers\dashboard\admin\faq_form\title::class, 'update'])->name('Updatesavefaqs.title');
    Route::get('/faqsUpdate.{id}', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'showid'])->name('faqsUpdate');
    Route::post('/Updatesavefaqs', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'update'])->name('Updatesavefaqs');

    Route::get('/all_list_pay', [\App\Http\Controllers\dashboard\admin\all_list_pay\index::class, 'ListShowAllFedapay'])->name('all.list.pay');
    Route::get('/form_homeslideimage', [\App\Http\Controllers\dashboard\admin\formhomeslideimage\index::class, 'view'])->name('save.form.home.slideimage');
    Route::post('/update_slideimage', [\App\Http\Controllers\dashboard\admin\formhomeslideimage\index::class, 'update'])->name('update.slideimage');
    Route::get('/agent_obp', [\App\Http\Controllers\dashboard\admin\list_agent_obp\index::class, 'show'])->name('memberobp');
    Route::match(array('GET', 'POST'),'/agent_obp_active{user_id}', [\App\Http\Controllers\dashboard\admin\list_agent_obp\index::class, 'agentOBP_active'])->name('agentOBP');
    Route::match(array('GET', 'POST'),'/agent_obp_disable{user_id}', [\App\Http\Controllers\dashboard\admin\list_agent_obp\index::class, 'agentOBP_disable'])->name('notAgentOBP');
    Route::post('/search_info_prod_admin', [\App\Http\Controllers\show_all_product\index::class, 'selectsearch2'])->name('search.prod.admin');

    Route::match(array('GET', 'POST'), '/dashboard_admin', [\App\Http\Controllers\dashboard\admin\home\form\step1::class, 'show'])->name('dashboard.admin');
    Route::match(array('GET', 'POST'), '/form_view_prod_step2', [\App\Http\Controllers\dashboard\admin\home\form\step2::class, 'show'])->name('form.view.prod.step2');
    Route::match(array('GET', 'POST'), '/form_view_prod_step3', [\App\Http\Controllers\dashboard\admin\home\form\step3::class, 'show'])->name('form.view.prod.step3');
    Route::post('/form_save_prod_step1', [\App\Http\Controllers\dashboard\admin\home\form\step1::class, 'save_form'])->name('form.save.prod.step1');
    Route::post('/form_save_prod_step2', [\App\Http\Controllers\dashboard\admin\home\form\step2::class, 'save_form'])->name('form.save.prod.step2');
    Route::post('/form_save_prod_step3', [\App\Http\Controllers\dashboard\admin\home\form\step3::class, 'save_form'])->name('form.save.prod.step3');

    Route::match(array('GET', 'POST'), '/dashboard_admin_Rental_management', [\App\Http\Controllers\dashboard\admin\Rental_management\form\step1::class, 'show'])->name('dashboard.admin.Rental_management');
    Route::match(array('GET', 'POST'), '/rent_form_view_prod_step2', [\App\Http\Controllers\dashboard\admin\Rental_management\form\step2::class, 'show'])->name('rent.form.view.prod.step2');
    Route::match(array('GET', 'POST'), '/rent_form_view_prod_step3', [\App\Http\Controllers\dashboard\admin\Rental_management\form\step3::class, 'show'])->name('rent.form.view.prod.step3');
    Route::post('/rent_form_save_prod_step1', [\App\Http\Controllers\dashboard\admin\Rental_management\form\step1::class, 'save_or_update_form'])->name('rent.form.save.prod.step1');
    Route::post('/rent_form_save_prod_step2', [\App\Http\Controllers\dashboard\admin\Rental_management\form\step2::class, 'save_or_update_form'])->name('rent.form.save.prod.step2');
    Route::post('/rent_form_save_prod_step3', [\App\Http\Controllers\dashboard\admin\Rental_management\form\step3::class, 'save_or_update_form'])->name('rent.form.save.prod.step3');

    Route::get('/dashboard_account_profil', [\App\Http\Controllers\dashboard\admin\profil\index::class, 'admingetaccountprofil'])->name('dashboard.profil');
    Route::post('/saveImg', [\App\Http\Controllers\dashboard\admin\profil\index::class, 'adminsaveImage'])->name('save.profil.img');
    Route::post('/saveprofilandupdate', [\App\Http\Controllers\dashboard\admin\profil\index::class, 'adminsaveprofilandupdate'])->name('saveprofilandupdate');
    Route::get('/dashboard_account_security',[\App\Http\Controllers\dashboard\admin\account_security\index::class, 'admingaccountSecurity'])->name('dashboard.security');
    Route::match(array('GET', 'POST'), '/ChangePassword', [\App\Http\Controllers\dashboard\admin\account_security\index::class, 'adminChangePassword'])->name('account.security.ChangePassword');

});