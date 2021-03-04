CREATE DATABASE wordpress;
CREATE USER 'tcynthia'@'localhost' IDENTIFIED BY 'qwerty1234567890';
GRANT ALL ON wordpress.* TO 'tcynthia'@'localhost';
FLUSH PRIVILEGES;
