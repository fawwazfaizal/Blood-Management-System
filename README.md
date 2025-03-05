"Dono Blood-Management-System" 

Heavily used inspired from https://www.youtube.com/watch?v=AjgREAoEGCc&list=PLV1nl4kfrf6F04v9OBouvIGHYOs0DyjqY&index=1

Credits to Youtube : My Project HD for it

Used, PHP and MySQL

MySQL 

CREATE DATABASE mypro_bbms;
USE mypro_bbms;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uname VARCHAR(250) NOT NULL,
    pass VARCHAR(250) NOT NULL
)

CREATE TABLE donor_registration ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    address VARCHAR(250) NOT NULL,
    city VARCHAR(50) NOT NULL,
    age VARCHAR(25) NOT NULL,
    bgroup VARCHAR(20) NOT NULL,
    email VARCHAR(200) NOT NULL,
    mno VARCHAR(50) NOT NULL
)

All codes are provided in a way. This is my first own project inspired only. Used it for educational purpose if needed somehow
