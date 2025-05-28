-- Crear la base de datos (si aún no existe)
CREATE DATABASE IF NOT EXISTS dbTienda;

-- Seleccionar la base de datos para trabajar en ella
USE dbTienda;

-- Crear la tabla productos
CREATE TABLE productos (
  id int(11) NOT NULL,
  nombre varchar(50) NOT NULL,
  precio decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Agregar la clave primaria al campo id
ALTER TABLE productos
  ADD PRIMARY KEY (id);

-- Modificar la columna id para que sea autoincrementable
ALTER TABLE productos
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
-- datos

INSERT INTO productos (nombre, precio) VALUES
('Arroz 1kg', 18.50),
('Frijol negro 1kg', 22.00),
('Aceite vegetal 900ml', 35.90),
('Azúcar 1kg', 20.00),
('Sal de mesa 1kg', 9.50),
('Pasta para sopa 200g', 6.75),
('Harina de trigo 1kg', 17.00),
('Café soluble 100g', 42.00),
('Leche en polvo 500g', 55.00),
('Atún en lata 140g', 14.50);