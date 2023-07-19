--
-- Realizar una consulta que permita conocer cuál es el producto que más stock tiene.
--

SELECT *
FROM productos
WHERE stock = (SELECT MAX(stock) FROM productos);


--
-- Realizar una consulta que permita conocer cuál es el producto más vendido.
--

SELECT id_producto, nombre_producto, SUM(cantidad) AS total_vendido
FROM ventas
GROUP BY id_producto, nombre_producto
ORDER BY total_vendido DESC
LIMIT 1;
