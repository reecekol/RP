CREATE DATABASE RP;

use RP;

CREATE TABLE recipes(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
category_id int(11),
description VARCHAR(500),
created_date DATETIME,
chef VARCHAR(50)
);


CREATE TABLE categories (
category_id INT(11) PRIMARY KEY AUTO_INCREMENT,
category VARCHAR(50)
)