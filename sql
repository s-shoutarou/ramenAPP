CREATE DATABASE ramenApp;

CREATE TABLE restaurants (
id int unsigned not null auto_increment,
name varchar(255) not null,
address varchar(255) not null,
taste varchar(255) not null,
pic varchar(255) not null,
text text(255) not null,
user int(100) unsigned not null ,
primary key (id)
);

CREATE TABLE users (
id int unsigned not null auto_increment,
user_name varchar(255) not null,
pass varchar(255) not null,
delete_flg int(1) not null default 0,
primary key (id)
);


