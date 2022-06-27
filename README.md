Database :

CREATE alltravel;

TABLES :

CREATE TABLE AllTravel (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titularname VARCHAR(30)  NOT NULL,
  titularlastname VARCHAR(30) NOT NULL,
  email VARCHAR(50)  NOT NULL,
  phone INT(10)  NOT NULL,
  nametravel VARCHAR(30)  NOT NULL,
  destination VARCHAR(30)  NOT NULL,
  startat DATE  NOT NULL,
  endat DATE  NOT NULL,
  price INT(10)  NOT NULL,
  rate INT(10)  NOT NULL,
  numberplace int(50)  NOT NULL,
  description text  NOT NULL
  image longblob NOT NULL);

CREATE TABLE UserTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lastname VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
phone INT(10) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL);

CREATE TABLE Reservation (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserId INT(6) NOT NULL,
TravelId INT(6) NOT NULL,
NumberReserved INT(6) NOT NULL);


DELETE FROM /*table*/ WHERE /*id = 1*/