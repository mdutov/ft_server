FROM debian:buster

RUN apt-get update && apt-get -y install nginx default-mysql-server openssl wget unzip php php-mysql php-fpm php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

COPY ./srcs/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
RUN rm -rf /etc/nginx/sites-enabled/default

COPY ./srcs/change_autoindex.sh ./change_autoindex.sh
COPY ./srcs/init_mysql.sql /tmp/init_mysql.sql
COPY ./srcs/init_server.sh /tmp/init_server.sh
COPY ./srcs/start.sh ./start.sh
COPY ./srcs/wp-config.php /tmp/wp-config.php

RUN sh ./tmp/init_server.sh

EXPOSE 80 443

ENTRYPOINT sh start.sh && bash
