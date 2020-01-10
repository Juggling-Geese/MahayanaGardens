CREATE DATABASE mahayanaliving;

USE mahayanaliving;

CREATE TABLE users (user_id SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, email VARCHAR(40), password_md5 VARCHAR(32), first VARCHAR(40), last VARCHAR(40));

CREATE TABLE addresses(address_id SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id SMALLINT NOT NULL, address1 VARCHAR(50), ADDRESS2 VARCHAR(50), CITY VARCHAR(30), STATE VARCHAR(3), ZIP VARCHAR(5), SHIPPING BOOLEAN, BILLING BOOLEAN);

CREATE TABLE inventory (PRODUCT_SKU VARCHAR(10) NOT NULL PRIMARY KEY, PRODUCT_DESC VARCHAR(40), COST FLOAT, QUANTITY SMALLINT);

CREATE TABLE invoices (invoice_id SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id SMALLINT, date_ordered DATE, order_shipped DATE, FOREIGN KEY user_id on users(user_id));

CREATE TABLE orders (orderid SMALLINT, invoice SMALLINT, item SMALLINT, quantity SMALLINT);

LOAD DATA INFILE 'inventory.txt' INTO TABLE inventory;

LOAD DATA INFILE 'users.txt' INTO TABLE users;

