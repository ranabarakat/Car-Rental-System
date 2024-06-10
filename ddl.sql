create database carRentalSystem;
use carRentalSystem;

create table admin(
admin_id int auto_increment,
email varchar(100) not null unique,
`password` VARCHAR(255) not null,
fname varchar(20) not null,
lname varchar(20) not null,
primary key (admin_id));

create table office(
office_id int,
city varchar(20) not null,
country varchar(20) not null,
`location` varchar(20) not null,
primary key (office_id));

create table car(
plate_id int,
brand varchar(30) not null,
`type` varchar(20) not null,
model varchar(20) not null,
`year` int not null,
color varchar(20) not null,
price float not null,
seats int not null,
`state` char not null,
insurance int not null,
`image` varchar(100) not null,
office_id int,
primary key (plate_id),
foreign key (office_id) references office(office_id));

create table customer(
customer_id int auto_increment,
SSN varchar(20) not null,
fname VARCHAR(20) not null,
lname VARCHAR(20) not null,
phone varchar(11) not null,
email varchar(100) not null unique,
`password` varchar(255) not null,
reg_date timestamp default current_timestamp,
sex char,
birth_date date not null,
`address` varchar(100) not null,
primary key (customer_id));


create table reservation(
reservation_id int auto_increment unique,    
customer_id int,
plate_id int,
start_date date not null,
end_date date not null,
price float not null,
reservation_date timestamp default current_timestamp,
payment_date date not null,
primary key (customer_id,plate_id,start_date),
foreign key (customer_id) references customer (customer_id),
foreign key (plate_id) references car(plate_id));