#!/bin/bash
/usr/bin/mysqld_safe &
sleep 5

#mysql -u root -e "CREATE DATABASE mydb"

echo "Seeding the database"

mysql -u root crud < dump.sql