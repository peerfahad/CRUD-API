#!/bin/bash

echo "Installing bower dependencies"
echo "yes" | bower install
echo "Installing composer dependencies"
echo "yes" | composer install
echo "Start the damn server!"
php -S localhost:9090
