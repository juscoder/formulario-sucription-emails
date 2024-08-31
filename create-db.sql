/*
Copia el código SQL a PHPmyadmin en pestaña SQL
y ejecuta da en el botón continuar.
*/
CREATE DATABASE suscripciones_db;

USE suscripciones_db;

CREATE TABLE suscripciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
