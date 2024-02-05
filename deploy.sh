#!/bin/bash

# Informations de connexion SSH
HOST="89.117.9.183"
PORT="65002"
USERNAME="u212330119"
PASSWORD="U6q^Xf$gNjHjq*rmZ"

# Commandes pour se connecter via SSH
sshpass -p $PASSWORD ssh -T -p $PORT $USERNAME@$HOST << EOF

# Se déplacer dans le répertoire d'installation de Composer
cd domains
cd txbest.online/public_html/obp/

# Afficher le répertoire actuel
pwd

# Créer le dossier 'hi'
mkdir hi

# Se déplacer dans le dossier 'hi'
cd hi

# Installer les dépendances avec Composer
composer2 install

# Quitter la connexion SSH
exit
EOF
