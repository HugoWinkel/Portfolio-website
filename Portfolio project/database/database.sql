DROP DATABASE IF EXISTS hwportfolio;
CREATE DATABASE hwportfolio;
USE hwportfolio;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (email, password) VALUES ('hugowinkel42@gmail.com', 'GOUDESTRAATLANTAARNPAAL123...');
