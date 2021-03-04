if grep -q "autoindex on" /etc/nginx/sites-available/localhost
then
	sed -i "s/autoindex on;/autoindex off;/" /etc/nginx/sites-available/localhost
	echo "autoindex off"
else
	sed -i "s/autoindex off;/autoindex on;/" /etc/nginx/sites-available/localhost
	echo "autoindex on"
fi
nginx -s reload
