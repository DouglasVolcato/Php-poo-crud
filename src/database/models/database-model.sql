CREATE DATABASE registration;

CREATE TABLE movies(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    year INT,
    image VARCHAR(1000)
);