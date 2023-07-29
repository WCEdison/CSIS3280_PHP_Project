DROP DATABASE IF EXISTS quiz2A;
CREATE DATABASE quiz2A;
use quiz2A;

CREATE TABLE car(
   id                INTEGER  NOT NULL PRIMARY KEY AUTO_INCREMENT
  ,year              INTEGER  NOT NULL
  ,make             VARCHAR(7) NOT NULL
  ,model             VARCHAR(32) NOT NULL
  ,price         INTEGER  NOT NULL
  ,drive             VARCHAR(3) NOT NULL
  ,battery           NUMERIC(4,1) NOT NULL
  ,eparange          INTEGER NOT NULL
  ,acceleration60mph NUMERIC(4,2) NOT NULL
  ,topspeed          INTEGER NOT NULL
) ENGINE=InnoDB;

INSERT INTO car(id,year,make,model,price,drive,battery,eparange,acceleration60mph,topspeed) VALUES
(1,2022,'Lucid','Air Dream Edition Performance 21',169000,'AWD',118,451,2.42,168)
,(2,2022,'BMW','i4 eDrive40 18',55400,'RWD',83.9,301,5.5,118)
,(3,2022,'Kia','EV6 Wind RWD LR 19',47000,'RWD',77.4,310,7.2,115)
,(4,2022,'Rivian','R1T (Large pack 21)',67500,'AWD',135,314,3,125)
,(5,2022,'Kia','EV6 GT-Line RWD LR 19',51200,'RWD',77.4,310,7.2,115)
,(6,2022,'Tesla','Model S Plaid 19',129990,'AWD',100,396,1.99,200)
,(7,2022,'Hyundai','Ioniq 5 SE AWD 19',47150,'AWD',77.4,256,5,115)
,(8,2022,'Tesla','Model Y Perf. LR AWD 21',63990,'AWD',80,303,3.5,155)
,(9,2022,'Audi','Q4 40 e-tron 19',43900,'RWD',82,250,7.9,99)
,(10,2022,'Tesla','Model X Plaid 20',126490,'AWD',100,333,2.5,163)
,(11,2022,'Tesla','Model 3 RWD 18',44990,'RWD',60,272,5.8,140);

create table users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	full_name VARCHAR(50),	
	username VARCHAR(20),	
	password VARCHAR(250)
) Engine=InnoDB;

INSERT INTO users (full_name, username, password) VALUES ('Quiz 2 Admin','quiz2admin','$2y$10$zSLik5ae2N79wd0uJlAT.ORmY6.buukaKBn/3dsTnVI059gr.hgSe');