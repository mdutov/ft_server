echo "ft_server starting"

service nginx start
service mysql start
service php7.3-fpm start

echo "the end of the beginning"
