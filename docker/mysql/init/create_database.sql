CREATE DATABASE IF NOT EXISTS wordpress;

GRANT ALL PRIVILEGES ON *.* TO root@'%' IDENTIFIED BY 'root';

FLUSH PRIVILEGES;
