run on MySQL:

create database crud;
use crud;
create table users(
                    id int primary key auto_increment,
                    name varchar(50),
                    email varchar(90),
                    password varchar (20));

