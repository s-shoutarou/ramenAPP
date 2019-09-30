CREATE DATABASE ramenApp;

CREATE TABLE restaurants (
id int unsigned not null auto_increment,
name varchar(255) not null,
addrtess varchar(255) not null,
taste int(1) not null,
tag1 int(10) unsigned,
tag2 int(10) unsigned,
tag3 int(10) unsigned,
user int(100) unsigned not null ,
primary key (id)
);

CREATE TABLE users (
id int unsigned not null auto_increment,
user_name varchar(255) not null,
primary key (id)
);


