<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <?php
    include "../autoload.php";

    use Videoclub\app\Videoclub;

    session_start();

    $socios = array();
    $productos = array();

    $club = new Videoclub("Maria");

    $club->incluirSocio("Amancio Ortega","amancio");
    $club->incluirSocio("Pablo Picasso","pablo", 2);
    $club->incluirJuego("God of War", 19.99, "PS4", 1, 1);
    $club->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
    $club->incluirDvd("Torrente", 4.5, "es", "16:9");
    $club->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
    $club->incluirDvd("El Imperio Contraataca", 3, "es,en", "16:9");
    $club->incluirCintaVideo("Los cazafantasmas", 3.5, 107);
    $club->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);


    foreach ($club->getSocios() as $key) {
        $socios[$key->nombre] = $key;
    }
    $_SESSION['usuario'] = $socios;

    foreach ($club->getProductos() as $key) {
        $productos[$key->titulo] = $key;
    }
    $_SESSION['productos'] = $productos;

    $usuario = $_POST['usuario'];
    ?>
    <div id="close"><a href='index.php' onclick='session_destroy()'>Cerrar sesión</a></div>
    <div id="main">
    <div id="tables">
        <table>
        <tr>
            <th colspan="3"><?php $usuario ?></th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Usuario</td>
            <td>Contraseña</td>
            <td>Alquileres actuales</td>
        </tr>
        <?php foreach ($_SESSION["usuario"] as $key) {
            $alq = $key->getNumSoportesAlquilados();
            echo ("<tr><td rowspan=" . ($alq + 1) . ">" . $key->nombre . "</td><td rowspan=" . ($alq + 1) . ">" . $key->getUsuario() . "</td><td rowspan=" . ($alq + 1) . ">" . $key->getContraseña() . "</td>");
            if ($alq == 0) {
                echo ("<td>No hay soportes alquilados actualmente</td>");
            } else {
                foreach ($key->getSoportesAlquilados() as $e) {
                    echo ("<tr><td>" . $e->titulo . "</td></tr>");
                }
            }
            echo ("</tr>");
        } ?>
    </table>
    </div>
    <br>
    <div id="tables">
    <table>
        <tr>
            <th colspan="2">Productos</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
        </tr>
        <?php foreach ($_SESSION["productos"] as $key) {
            echo ("<tr><td>" . $key->titulo . "</td><td>" . number_format($key->getPrecioIVA(), 2) . "€</td></tr>");
        } ?>
    </table>
    </div>
    </div>

    <style>
        #close {
            text-align: right;
        }

        #main{
            display: block;
        }

        #tables {
            display: grid;
            place-items: center;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border: solid 1px black;
            width: 25vw;
        }
    </style>
</body>

</html>