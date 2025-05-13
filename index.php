
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 15px 0;
        }
        a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel Principal</h1>
        <ul>
            <li><a href="registrar_cliente.php">Registrar Cliente</a></li>
            <li><a href="registrar_producto.php">Registrar Producto</a></li>
            <li><a href="registrar_pedido.php">Registrar Pedido</a></li>
            <li><a href="vista_clientes_pedidos.php">Ver Clientes y Pedidos</a></li>
        </ul>
    </div>
</body>
</html>
