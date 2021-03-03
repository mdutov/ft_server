chmod 755 ./start.sh
chmod 755 ./change_autoindex.sh

service mysql start
mysql < ./tmp/init_mysql.sql

mkdir /etc/nginx/ssl_certs
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl_certs/private.pem -keyout /etc/nginx/ssl_certs/public.key -subj "/C=RU/ST=Moscow/L=Moscow/O=School_21/OU=tcynthia/CN=localhost"
openssl rsa -noout -text -in /etc/nginx/ssl_certs/localhost_public.key

mkdir /var/www/html/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.zip
unzip ./phpMyAdmin-5.0.4-all-languages.zip -d /
mv /phpMyAdmin-5.0.4-all-languages/* /var/www/html/phpmyadmin

wget http://wordpress.org/latest.tar.gz
tar xfvz latest.tar.gz
mv wordpress/ /var/www/html/
mv /tmp/wp-config.php /var/www/html/wordpress/

chown -R www-data /var/www/html
chmod -R 755 /var/www/html
