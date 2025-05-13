<?php
include("conexion.php");

$resultado = $conn->query("SELECT * FROM clientes");
echo "<h2>Lista de Clientes</h2><ul>";
while ($fila = $resultado->fetch_assoc()) {
    echo "<li>{$fila['nombre']} {$fila['apellido']} - {$fila['correo']} - {$fila['telefono']}</li>";
}
echo "</ul>";
?>
