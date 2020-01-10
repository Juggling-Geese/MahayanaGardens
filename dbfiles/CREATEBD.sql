CREATE DATABASE mahayanagardens;

USE mahayanagardens;

CREATE TABLE users (user_id VARCHAR(30) PRIMARY KEY, email VARCHAR(40), password_md5 VARCHAR(32), first VARCHAR(40), last VARCHAR(40));

CREATE TABLE addresses(address_id SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(30) NOT NULL, 
	address1 VARCHAR(50), ADDRESS2 VARCHAR(50), CITY VARCHAR(30), STATE VARCHAR(3), ZIP VARCHAR(5), SHIPPING BOOLEAN, BILLING BOOLEAN,
    foreign key (user_id) references users(user_id));

CREATE TABLE inventory (PRODUCT_SKU VARCHAR(10) NOT NULL PRIMARY KEY, PRODUCT_DESC VARCHAR(40), COST FLOAT, QUANTITY SMALLINT);

CREATE TABLE invoices (invoice_id SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id varchar(30), date_ordered DATE, order_shipped DATE, FOREIGN KEY (user_id) REFERENCES users(user_id));

CREATE TABLE orders (orderid SMALLINT, invoice SMALLINT, product_sku varchar(10), quantity SMALLINT, FOREIGN KEY (invoice) REFERENCES invoices(invoice_id), foreign key (product_sku) references inventory(product_sku));

LOAD DATA INFILE 'users.txt' INTO TABLE users;
LOAD DATA INFILE 'addresses.txt' into table ADDRESSES;
LOAD DATA INFILE 'inventory.txt' INTO TABLE inventory;
LOAD DATA INFILE 'invoices.txt' into table invoices;
LOAD DATA INFILE 'orders.txt' INTO TABLE orders;