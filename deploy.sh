#!/bin/bash

# Variables
REMOTE_HOST="89.117.9.183"
REMOTE_PORT="65002"
REMOTE_USER="u212330119"
REMOTE_PASSWORD="U6q^Xf$gNjHjq*rmZ"
REMOTE_DIR="/obp/OBP/"

# Command to connect via SSH and run 'composer install'
sshpass -p "$REMOTE_PASSWORD" ssh -p "$REMOTE_PORT" "$REMOTE_USER"@"$REMOTE_HOST" << EOF
  cd "$REMOTE_DIR"
  composer install
EOF