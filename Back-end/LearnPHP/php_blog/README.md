# SAAD's Blog 
In php
Hi, Jaan


## Database structure

Initially we have 2 tables. Users and Post, but lets start with user first

for the user, we will keep 2 pieces of information, 
1) username
2) password, 

however, before we begin connection to the database, we need to create it first.
to create it, we will open our mysql clietn(i am using cli, u can use web based too)
and create a database named 'phpblog'.


After creating database, we neeed a table to hold users, 
to do that we make use of CREATE QUERY : 

create table user( name varchar(24) NOT NULL, password varchar(24) NOT NULL);


### SELECT

Uptil now we have used, CREAT query. now we are going to see how to RETRIVE stuff from database. 
For that we use select queery. 