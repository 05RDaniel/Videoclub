<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos del cliente</title>
</head>
<body>
    <form action="./updateCliente.php" method="POST">
        <label for="name">Introduce un nuevo nombre</label>
        <input type="text" name="updateName">
        <label for="user">Introduce un nuevo nombre de usuario</label>
        <input type="text" name="updateUser">
        <label for="rent">Introduce un nuevo numero de soportes simultaneos alquilados</label>
        <input type="text" name="updateRent">
        <label for="pass">Introduce una nueva contraseña</label>
        <input type="password" name="updatePassword">
    </form>
</body>
</html>