#!/bin/bash
clear

echo "Pulling files from git..."
git pull
printf "\n"

echo "Fixing permissions..."
find . -type d -exec chmod 0755 {} +
find . -type f -exec chmod 0644 {} +
chmod a+x AutoUpdate.sh

echo "Done."
printf "\n"