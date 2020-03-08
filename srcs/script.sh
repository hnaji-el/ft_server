#!/bin/bash

chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

chown -R mysql: /var/lib/mysql
service mysql start
echo "CREATE DATABASE dbhamid;" | mysql -u root
echo "CREATE USER 'hamid'@localhost IDENTIFIED BY '123';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON *.* TO 'hamid'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mysql -u root dbhamid < /root/dbhamid.sql

service php7.3-fpm start
service nginx start
