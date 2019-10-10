CREATE DATABASE ramenApp;

CREATE TABLE restaurants (
id int unsigned not null auto_increment,
name varchar(255) not null,
address varchar(255) not null,
taste varchar(255) not null,
smoke varchar(10),
option_id1 int(100),
option_id2 int(100),
option_id3 int(100),
option_id4 int(100),
option_id5 int(100),
option_id6 int(100),
option_id7 int(100),
option_id8 int(100),
option_id9 int(100),
option_id10 int(100),
pic varchar(255) not null,
introduction text not null,
user int(100) unsigned not null,
primary key (id)
);

CREATE TABLE users (
id int unsigned not null auto_increment,
user_name varchar(255) not null,
pass varchar(255) not null,
delete_flg int(1) not null default 0,
primary key (id)
);

CREATE TABLE tastes (
    id int unsigned not null auto_increment,
    taste varchar(255) not null,
    primary key (id)
);

CREATE TABLE option_info (
	id int unsigned not null auto_increment,
	text text not null,
	primary key (id)
);

INSERT INTO tastes (taste) VALUES ("しょうゆ");
INSERT INTO tastes(taste) VALUES ("しお");
INSERT INTO tastes (taste) VALUES ("とんこつ");
INSERT INTO tastes (taste) VALUES ("家系");
INSERT INTO tastes (taste) VALUES ("二郎");
INSERT INTO tastes (taste) VALUES ("その他");

INSERT INTO option_info (text) VALUES ("深夜(AM2:00)まで営業");
INSERT INTO option_info (text) VALUES ("女性も入りやすい");
INSERT INTO option_info (text) VALUES ("飲酒可能");
INSERT INTO option_info (text) VALUES ("薄味");
INSERT INTO option_info (text) VALUES ("ライス無料");
INSERT INTO option_info (text) VALUES ("太麺");
INSERT INTO option_info (text) VALUES ("細麺");
