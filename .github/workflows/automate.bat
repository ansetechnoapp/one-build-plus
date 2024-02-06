@echo off
echo Exécution de composer install...
cd F:\laragon\www\Projet_PHP\Projet_Laravel\obp
composer install
composer update
php artisan cache:clear 
php artisan storage:link
php artisan optimize
echo Installation terminée.
pause
