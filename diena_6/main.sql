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
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50),
  password VARCHAR(50),
  name VARCHAR(50),
  lname VARCHAR(50),
  address VARCHAR(100),
  postcode VARCHAR(50),
  city VARCHAR(50),
  `date` DATETIME,
  order_quantity INT(10)
);
CREATE TABLE newsletter (
  id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
  `date` DATETIME,
  email VARCHAR(50)
);
CREATE TABLE orders (
  id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  lname VARCHAR(50),
  email VARCHAR(50),
  address VARCHAR(50),
  postcode INT(10),
  city VARCHAR(50),
  tel VARCHAR(50),
  shipping_id SMALLINT(10),
  `date` DATETIME,
  product_quantity SMALLINT(10),
  total_price DECIMAL(5,2)
);
CREATE TABLE images (
  id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
  img_name VARCHAR(50),
  product_id SMALLINT(10)
);
CREATE TABLE feedback (
  id SMALLINT(10) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  email VARCHAR(50),
  comment TEXT(50000),
  `date` DATETIME
);

INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Roma', 'Paveikslas žemėlapis: Roma 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 12.50, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Vilnius', 'Paveikslas žemėlapis: Vilnius 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 13.50, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Kaunas', 'Paveikslas žemėlapis: Kaunas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 15.50, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Paryžius', 'Paveikslas žemėlapis: Paryžius 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 22.50, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Berlynas', 'Paveikslas žemėlapis: Berlynas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 32.50, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Amsterdamas', 'Paveikslas žemėlapis: Amsterdamas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 9.50, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Briuselis', 'Paveikslas žemėlapis: Briuselis 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 20.99, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Londonas', 'Paveikslas žemėlapis: Londonas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 17.00, "30x40", "ofsetinis", 0, NOW());
INSERT INTO product VALUES (NULL, 'Paveikslas žemėlapis: Bostonas', 'Paveikslas žemėlapis: Bostonas 30x40 su rėmeliais, paveikslas atspausdintas ant aukštos kokybės ofsetinio popieriaus.', 11.50, "30x40", "ofsetinis", 0, NOW());

INSERT INTO shipping VALUES (NULL, "Lietuvos paštas", "Standartinis siuntimas visoje Lietuvoje", 3, 2.99);
INSERT INTO shipping VALUES (NULL, "DPD", "Express siuntimas per kurjerį",2, 5.99);
