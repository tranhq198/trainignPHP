-- create database --
CREATE DATABASE learnphp;

-- create table in database --
CREATE TABLE users(
   id INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(40),
   phone VARCHAR(20),
   email VARCHAR(45),
   city_code VARCHAR(5),
   created_at DATETIME
);

CREATE TABLE products(
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50),
   price DOUBLE,
   in_stock INT,
   description VARCHAR(120) NULL,
   created_at DATETIME
);

CREATE TABLE orders(
   id INT AUTO_INCREMENT PRIMARY KEY,
   code VARCHAR(15),
   amount DOUBLE,
   user_id INT,
   CONSTRAINT linked_user_id FOREIGN KEY (user_id) REFERENCES order_items (order_id),
   address VARCHAR(150),
   created_at DATETIME
);

CREATE TABLE order_items(
    order_id INT,
    CONSTRAINT linked_order_id FOREIGN KEY (order_id) REFERENCES products(id),
    product_id INT,
    CONSTRAINT linked_product_id FOREIGN KEY (product_id) REFERENCES products(id),
    quantity INT,
    PRIMARY KEY (order_id, product_id)
);

--- insert into users table  ---
INSERT INTO `users`(
    `username`,
    `phone`,
    `email`,
    `city_code`,
    `created_at`
    ) VALUES (
        "tuandn",
        "tuandn@kaiyouit.com",
        123456789,
        "HN",
        CURRENT_DATE()
    ),
    (
        "hungnh",
        "hungnh@kaiyouit.com",
        123456789,
        "HA",
        CURRENT_DATE()
    ),
    (
        "longnh",
        "longnh@kaiyouit.com",
        123456789,
        "QN",
        CURRENT_DATE()
    ),
    (
        "test",
        "test@kaiyouit.com",
        123456789,
        "HN",
        CURRENT_DATE()
    );


--- insert into products table  ---
INSERT INTO `products`(
    `name`,
    `price`,
    `in_stock`,
    `description`,
    `created_at`
    ) VALUES (
        "Ba Con Sâu",
        145000,
        11,
        "",
        "2019-05-03 21:00:11"
    ),
    (
        "Bánh Mì",
        15000,
        0,
        "Bánh mì gia truyền",
        "2020-04-02 18:00:06"
    ),
    (
        "Cafe nâu đá L",
        15000,
        0,
        "Cafe nâu đá size L",
        "2019-08-10 11:10:06"
    ),
    (
        "Sữa Milo",
        6000,
        50,
        "",
        "2019-01-01 09:20:00"
    );

--- insert into order table  ---
INSERT INTO `orders`(
    `code`,
    `amount`,
    `user_id`,
    `address`,
    `created_at`
    ) VALUES (
        1601413565680,
        1504000,
        2,
        "Vinh - Nghệ An",
        "2020-05-06 12:00:05"
    ),
    (
        1601432105623,
        999000,
        3,
        "Hạ Long - Quảng Ninh",
        "2020-09-30 8:00:00"
    ),
    (
        1601433405611,
        110000,
        1,
        "Thạch Thất - Hà Nội",
        "2020-08-01 16:50:04"
    );

--- insert into order_items table  ---
INSERT INTO `order_items`(
    `order_id`,
    `product_id`,
    `quantity`,
    ) VALUES (1,1,10), (2,1,5), (2,3,1), (3,1,1);


--- c. update  ---
UPDATE users SET phone="987654231" WHERE city_code = "HN";
--- d. delete ---
DELETE FROM users WHERE username="test";
--- e. select ---
SELECT * FROM products WHERE created_at > DATE("2020-05-07");
-----
SELECT * FROM products WHERE id = 1;
-----
SELECT * FROM products WHERE in_stock <= 2;
-----
SELECT *, (SELECT SUM(quantity) as quantity
        FROM `order_items`
        WHERE product_id = id
        GROUP BY product_id)
    as quantity
FROM products
ORDER BY quantity
DESC LIMIT 2