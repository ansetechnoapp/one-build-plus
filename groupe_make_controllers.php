<?php

// Charger l'application Laravel
// Placer vous a la racine du projet et exécuté php groupe_make_controllers.php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

// Initialise l'application Laravel
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\Artisan;

// Liste des contrôleurs à créer
$controllers = [
    'about/index',
    'auth/reset_password',
    'auth_login/index',
    'auth_signup/index',
    'auth_signup/step2',
    'auth_signup/w_secondExemplaire',
    'buy/index',
    'contact/index',
    'dashboard/account_security/index',
    'dashboard/admin/account_security/index',
    'dashboard/admin/all_list_pay/index',
    'dashboard/admin/commentUser/update',
    'dashboard/admin/commentUser/view',
    'dashboard/admin/faq_form/index',
    'dashboard/admin/faq_form/title',
    'dashboard/admin/faqs/index',
    'dashboard/admin/formhomeslideimage/index',
    'dashboard/admin/home/form/step1',
    'dashboard/admin/home/form/step2',
    'dashboard/admin/home/form/step3',
    'dashboard/admin/list_agent_obp/index',
    'dashboard/admin/list_prod/index',
    'dashboard/admin/list_prod/index2',
    'dashboard/admin/list_prod/search_list',
    'dashboard/admin/list_user/index',
    'dashboard/admin/profil/index',
    'dashboard/admin/Rental_management/form/step1',
    'dashboard/admin/Rental_management/form/step2',
    'dashboard/admin/Rental_management/form/step3',
    'dashboard/admin/Rental_management/list_prod',
    'dashboard/admin/send_sms/index',
    'dashboard/billing_history/index',
    'dashboard/commentUser/update',
    'dashboard/commentUser/view',
    'dashboard/home/index',
    'dashboard/list_payment/liste',
    'dashboard/payment/index',
    'dashboard/profil/index',
    'devis/index',
    'devis/template',
    'emails/contact',
    'emails/sendregisteruser',
    'faqs/index',
    'forgetpassword/sendEmail',
    'home/index',
    'page_confirm_message/confirme_updateforgetpassword',
    'page_confirm_message/sendforforgetpassword',
    'payment/index',
    'payment/suite',
    'payment/suite2',
    'property_detail/index',
    'rent/index',
    'search/index',
    'sell/index',
    'show_all_product/index',
    'show_prod_location/index',
    'user_disable/index',
];

// Créer les contrôleurs
foreach ($controllers as $controller) {
    Artisan::call('make:controller', ['name' => $controller]);
}

echo "Toutes les commandes de création de contrôleurs ont été exécutées avec succès.\n";