<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>
<body>
    <h1>CREAR CARRITO</h1>
    <form action="php/crear.php" method="post">
        <strong>Nombre: </strong>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <strong>DNI: </strong>
        <input type="text" id="dni" name="dni" required>
        <input type="submit" value="Submit">
    </form>
    <br><br>
    <h1>LISTAR ITEMS</h1>
    <?php
        include 'php/listar.php';
    ?>
    
</body>
</html>