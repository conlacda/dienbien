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
Thay đổi kích thước của 1 trường trong mysql  SET GLOBAL max_allowed_packet=1073741824; (1GB)
Khởi động lại mysql/mariadb  sudo systemctl [restart/start] mariadb
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

---------- 
Server Duy 
ssh -i C:\Users\phaml\.ssh\id_rsa.pub phaml@34.87.97.103
ssh -i C:\Users\phaml\.ssh\id_rsa.pub phaml@35.222.39.29 -> DUY
sudo service nginx restart
Ko được set 777 - nếu quyền 77 thì sửa như dưới
sudo chown -R $USER:www-data storage
chmod -R 775 storage

F://
ssh ubuntu@54.242.88.149 -i amazonkey.pem


Đường dẫn ảnh đang chỉ sai vị trí
mysql pass la password
Thay mat khau
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
sudo tail -30 /var/log/nginx/error.log   log cua nginx
sudo chmod a+rwx /path/to/file : cấp quyền cho toàn bộ thư mục

virtual box long 1
