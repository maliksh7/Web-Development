CREATE DATABASE IF NOT EXIST phpblog;

create table user( 
	name varchar(24) NOT NULL, 
	password varchar(24) NOT NULL);