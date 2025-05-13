CREATE DATABASE IF NOT EXISTS tienda_ropa;
USE tienda_ropa;


CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    direccion VARCHAR(100),
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(11) NOT NULL
);


CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2),
    categoria VARCHAR(50),
    stock INT
);


CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    fecha DATE,
    estado VARCHAR(20),
    total DECIMAL(10,2),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id)
);


CREATE TABLE IF NOT EXISTS ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT,
    id_producto INT,
    cantidad INT,
    precio_venta DECIMAL(10,2),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE OR REPLACE VIEW vista_clientes_pedidos AS
SELECT CONCAT(c.nombre, ' ', c.apellido) AS cliente, p.fecha, p.total
FROM clientes c
JOIN pedidos p ON c.id = p.id_cliente;
