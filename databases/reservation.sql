CREATE DATABASE reservation;
USE reservation; 

CREATE TABLE reserve(
reservationNr int NOT NULL AUTO_INCREMENT, 
resDate date NOT NULL, 
resTime time NOT NULL, 
people varchar(100) NOT NULL, 
username varchar(255) NOT NULL, 
email varchar(255) NOT NULL, 
phone varchar(50) NOT NULL, 
primary key(reservationNr)
); 
