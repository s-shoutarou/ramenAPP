CREATE DATABASE ramenApp;

CREATE TABLE restaurants (
id int unsigned not null auto_increment,
name varchar(255) not null,
addrtess varchar(255) not null,
taste varchae(255) not null,
introduction varchar(20000) not null,
user int(100) unsigned not null ,
primary key (id)
);

CREATE TABLE users (
id int unsigned not null auto_increment,
user_name varchar(255) not null,
primary key (id)
);


