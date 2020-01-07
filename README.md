# dienbien
dien bien
Cai php 
sudo dnf install php-cli
sudo dnf install php-mysqli
Cai composer
sudo apt-get install php-json
curl -sS https://getcomposer.org/installer | php
php composer.php + install/dump-autoload ...
Check version fedora
/etc/os-release
Cai mysql (https://www.hostinger.com/tutorials/how-to-install-mysql-on-centos-7)
sudo [yum/dnf] install mysql-server
sudo systemctl start mysqld

Import database
mysql
CREATE DATABASE dienbien;
use dienbien
source backup-file.sql;
Composer 
composer install --ignore-platform-reqs

Cài git sudo yum install  git
NGINX sudo systemctl restart nginx
Đã thực hiện
nano /etc/sysconfig/selinux
set to disabled
Sửa lỗi laravel.log
setenforce 0
setenforce 1
sudo chmod -R 777 app/storage 
