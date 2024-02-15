@echo off

set host=89.117.9.183
set port=65002
set user=u212330119
set private_key_path=C:\chemin\vers\tacle\ssh\private_key.pem
set remote_path=/home/u212330119/domains/txbest.online/public_html/obp/

echo Se connecter au serveur Hostinger via SSH avec une clé privée...
ssh -i "%private_key_path%" -p %port% %user%@%host% -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null << EOF

echo Naviguer vers le répertoire d'installation...
cd %remote_path%

echo Vérifier si le dossier OBP existe...
if not exist OBP (
    echo Création du dossier OBP...
    mkdir OBP
)

echo Installation de Composer...
composer2 install

echo Mise à jour de Composer...
composer2 update

echo Sortir de la session SSH.
exit
EOF

echo Script terminé.