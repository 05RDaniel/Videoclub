<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMain.css" />
    <title>Document</title>
</head>

<body>
    <?php
    include "../autoload.php";

    use Videoclub\app\Cliente;
    use Videoclub\app\Videoclub;

    session_start();

    $productos = array();

    $club = new Videoclub("Maria");

    $club->incluirSocio("Amancio", "amancio");
    $club->incluirSocio("Pablo Picasso", "pablo", 2);
    $club->incluirJuego("God of War", 19.99, "PS4", 1, 1);
    $club->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
    $club->incluirDvd("Torrente", 4.5, "es", "16:9");
    $club->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
    $club->incluirDvd("El Imperio Contraataca", 3, "es,en", "16:9");
    $club->incluirCintaVideo("Los cazafantasmas", 3.5, 107);
    $club->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);
    $alquileres = [2, 3];
    $club->alquilaSocioProducto(1, $alquileres);


    $usuario = isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario']) : null;
    $usr = new Cliente("Pepe", "pepe");
    foreach ($club->getSocios() as $key) {
        if ($key->nombre == $usuario) {
            $usr = $key;
        }
    }
    ?>
    <div id="header">
        <div id="close"><a href='index.php' onclick='session_destroy()'>Cerrar sesión</a></div>
        <div id="welcome">Bienvenido <?php echo ($usr->nombre) ?></div>
    </div>
    <div id="tables">
        <table>
            <tr>
                <th colspan="2">Productos alquilados</th>
            </tr>
            <tr>
                <td>Título</td>
                <td>Precio</td>
            </tr>
            <?php foreach ($usr->getSoportesAlquilados() as $key) {
                echo ("<tr><td>" . $key->titulo . "</td><td>" . number_format($key->getPrecioIVA(), 2) . "€</td></tr>");
            } ?>
        </table>
    </div>
</body>

</html>