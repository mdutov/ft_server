CREATE DATABASE wordpress;
CREATE USER 'tcynthia'@'localhost' IDENTIFIED BY 'qwerty';
GRANT ALL ON wordpress.* TO 'tcynthia'@'localhost';
FLUSH PRIVILEGES;
