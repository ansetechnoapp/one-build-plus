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
Route::middleware(['auth', 'isActive', 'admin'])->group(function () {
    Route::get('/dashboard.admin', function () {
        return view('dashboard.admin.home.index');
    })->name('dashboard.admin');
    Route::get('/form_send_sms', function () {
        return view('dashboard.admin.send sms.index');
    })->name('form.send.sms');
    Route::get('/list_prod', [\App\Http\Controllers\prod\select::class, 'show'])->name('list_prod');
    Route::get('/list_user', [\App\Http\Controllers\Auth\FormLogin::class, 'show_list_user'])->name('list_user');
    Route::get('/view_prod_update', [\App\Http\Controllers\prod\update::class, 'show'])->name('view.prod.update');
    Route::get('/view_prod_rent_update', [\App\Http\Controllers\dashboard\admin\Rental_management\upadate_prod::class, 'show'])->name('view.prod.rent.update');
    Route::post('/updade_prod', [\App\Http\Controllers\prod\update::class, 'updateprod'])->name('updade.prod');
    Route::post('/updade_prod_rent', [\App\Http\Controllers\dashboard\admin\Rental_management\upadate_prod::class, 'updateprod'])->name('updade.prod.rent');
    Route::get('/user_disable{user_id}', [\App\Http\Controllers\save\account::class, 'userDisable'])->name('user.disable');
    Route::get('/user_activate{user_id}', [\App\Http\Controllers\save\account::class, 'userActivate'])->name('user.activate');
    Route::match(array('GET', 'POST'), '/admin.comment', [\App\Http\Controllers\dashboard\admin\commentUser\view::class, 'view'])->name('dashboard.admin.commentUser');
    Route::match(array('GET', 'POST'), '/admin.comment.update.statut.disable{id}', [\App\Http\Controllers\dashboard\admin\commentUser\view::class, 'statutDisable'])->name('admin.comment.update.statut.disable');
    Route::match(array('GET', 'POST'), '/admin.comment.update.statut.active{id}', [\App\Http\Controllers\dashboard\admin\commentUser\view::class, 'statutActive'])->name('admin.comment.update.statut.active');
    Route::get('/dashboard.admin.Rental_management', function () {
        return view('dashboard.admin.Rental_management.index');
    })->name('dashboard.admin.Rental_management');
    Route::get('/Rental.management.list_prod', [\App\Http\Controllers\dashboard\admin\Rental_management\list_prod::class, 'show'])->name('Rental.management.list.prod');
    Route::get('/faq.form', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'view'])->name('faq_form');
    Route::get('/faq.title.form', [\App\Http\Controllers\dashboard\admin\faq_form\title::class, 'view'])->name('faq_title_form');
    Route::post('/save.form.faq', [\App\Http\Controllers\dashboard\admin\faq_form\index::class, 'save'])->name('save_form_faq');

    Route::get('/delete.faq.{id}', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'deleteforfaq'])->name('delete_faq');
    Route::get('/delete.title.faq.{id}', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'deleteforfaqtitle'])->name('delete_title_faq');

    Route::post('/save.form.title.faq', [\App\Http\Controllers\dashboard\admin\faq_form\title::class, 'save'])->name('save_form_title_faq');
    Route::get('/faqs_admin', [\App\Http\Controllers\dashboard\admin\faqs\index::class, 'show'])->name('faqs.admin');
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
});