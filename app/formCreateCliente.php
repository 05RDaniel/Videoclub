<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para clientes</title>
</head>
<body>
    <form action="./createCliente.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario"><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="password"><br><br>
        <input type="button" name="Submit" value="enviar">
   </form>
</body>
</html>


