#!/bin/bash

echo "Installing bower dependencies"
bower install --force --verbose

echo "Installing composer dependencies"
echo "yes" | composer install --verbose

cd public

echo "Start the damn server!"
php -S localhost:
