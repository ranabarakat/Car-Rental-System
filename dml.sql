INSERT INTO admin (email ,`password`, fname,lname) VALUES 
('rana@gmail.com',MD5('admin'),'Rana','Barakat');


INSERT INTO office (office_id ,city,country, `location`) VALUES 
(1234,'Alexandria','Egypt','kafr abdou');
INSERT INTO office (office_id ,city,country, `location`) VALUES 
(5678,'New Jersey','USA','Morristown');
INSERT INTO office (office_id ,city,country, `location`) VALUES 
(1111,'Cairo','Egypt','EL-Sheikh Zayed');


insert into car (plate_id,brand,`type`,`year`,color,price,seats,`state`,insurance,image,office_id) values
 (7077,'Nissan','Sedan',2017,'red',300000,4,'A',500,load_file("D:/xampp/htdocs/nissan(1).jpg"),1234);

 
insert into car (plate_id,brand,`type`,`year`,color,price,seats,`state`,insurance,image,office_id) values
 (8088,'Renault','hatch-back',2018,'black',450,4,'A',10000,load_file("D:/xampp/htdocs/renault(2).jpg"),5678);

 insert into car (plate_id,brand,`type`,`year`,color,price,seats,`state`,insurance,image,office_id) values
 (1001,'Range Rover','Sport',2021,'white',700,7,'A',10000,load_file("D:/xampp/htdocs/rangerover.jpg"),1111);

 insert into car (plate_id,brand,`type`,`year`,color,price,seats,`state`,insurance,image,office_id) values
 (2377,'KIA','Sport',2022,'blue',325,6,'A',5000,load_file("D:/xampp/htdocs/kia.jpg"),5678);
 
  insert into car (plate_id,brand,`type`,`year`,color,price,seats,`state`,insurance,image,office_id) values
 (1541,'Toyota','Camry',2015,'white',300,4,'A',7000,load_file("D:/xampp/htdocs/toyota.jpg"),1234);