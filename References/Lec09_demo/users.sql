drop database if exists auth_demo;
create database auth_demo;
use auth_demo;

create table users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	full_name VARCHAR(50),	
	username VARCHAR(20),	
	password VARCHAR(250)
) Engine=InnoDB;

INSERT INTO users (full_name, username, password) VALUES ('user demo','userdemo','$2y$10$93ofAraZ0hv7p1G8Awbr1OyTlB9MOncR6iWvJ/DbihaksaLgIySI6');