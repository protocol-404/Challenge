CREATE DATABASE register;
USE register;

CREATE TABLE roles{
    ID_role INT PRIMARY KEY AUTO_INCREMENT;
    names VARCHAR(50) NOT NULL;
}

CREATE TABLE users (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    ID_role INT NOT NULL,
    FOREIGN KEY (ID_role) REFERENCES roles(ID_role);
)

INSERT INTO `roles`(`names`) VALUES ('User');
INSERT INTO `roles`(`names`) VALUES ('Admin')