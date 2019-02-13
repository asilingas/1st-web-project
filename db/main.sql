CREATE TABLE product (
   id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50),
   description TEXT,
   price DECIMAL(5,2),
   size VARCHAR(50),
   type VARCHAR(50),
   quantity SMALLINT(10),
   date_creation DATETIME
   );
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Viena', 'Paveikslas žemėlapis: Viena 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 12.50, "30x40", "ofsetinis", 0, NOW());

CREATE TABLE shipping (
   id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50),
   description TEXT,
   duration TINYINT(3),
   price DECIMAL(5,2)
   );
INSERT INTO shipping VALUES (NULL, 'Pasiimti vietoje', 'Prekes atsiimti iš sandėlio Berželio gatvėje, Kaune', 0, 0.00);

CREATE TABLE sales (
  id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
  `date` DATETIME,
  user_id SMALLINT(10),
  product_id SMALLINT(10),
  order_id SMALLINT(10)
);

CREATE TABLE users (
  id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50),
  name VARCHAR(50),
  lname VARCHAR(50),
  address VARCHAR(100),
  postcode SMALLINT(10),
  city VARCHAR(50),
  order_quantity SMALLINT(10)
);
