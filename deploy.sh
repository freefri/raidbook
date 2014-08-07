#!/bin/bash
# TODO not allow to run from a directory different than / root
# This script updates dependencies of the project
# It should be run each time you deploy changes on the server
if [ ! -f ./composer.phar ]; then
    echo "Installing composer.phar..."
    curl -sS https://getcomposer.org/installer | php
fi
php composer.phar install

