CREATE DATABASE register; 
USE register;

CREATE TABLE users(
id int NOT NULL AUTO_INCREMENT,
username varchar(255) NOT NULL,
email varchar(255) NOT NULL,
verified tinyint(1) NOT NULL DEFAULT '0',
token varchar(255) DEFAULT NULL, 
password varchar(225) NOT NULL,
primary key(id)
);