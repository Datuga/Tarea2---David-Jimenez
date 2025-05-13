<?php
include("conexion.php");

$sql = "UPDATE productos SET precio = precio * 1.10 WHERE categoria = 'Camisetas'";
if ($conn->query($sql) === TRUE) {
    echo "Precios actualizados correctamente.";
} else {
    echo "Error al actualizar precios: " . $conn->error;
}
?>
