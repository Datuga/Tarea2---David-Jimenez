<?php
include("conexion.php");

$resultado = $conn->query("SELECT * FROM vista_clientes_pedidos");
echo "<h2>Vista de Clientes y Pedidos</h2><ul>";
while ($fila = $resultado->fetch_assoc()) {
    echo "<li>{$fila['cliente']} - {$fila['fecha']} - Total: {$fila['total']}</li>";
}
echo "</ul>";
?>
