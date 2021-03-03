CREATE DATABASE wordpress;
CREATE USER 'shmignon'@'localhost' IDENTIFIED BY 'n75G3nJbdgr78pEng';
GRANT ALL ON wordpress.* TO 'shmignon'@'localhost';
FLUSH PRIVILEGES;
