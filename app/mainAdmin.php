<?php
include "../autoload.php";

use Videoclub\app\Videoclub;

session_start();
echo ("<a href='index.php' onclick='session_destroy()'>Cerrar sesión</a>");

$socios = array();
$productos = array();

$club = new Videoclub("Maria");

$club->incluirSocio("Amancio Ortega");
$club->incluirSocio("Pablo Picasso", 2);
foreach ($club->getSocios() as $key) {
    $socios[$key->nombre] = $key;
}
$_SESSION['usuario'] = $socios;
echo ("Usuarios:<table border='1'><tr>");
foreach ($_SESSION["usuario"] as $key) {
    echo ("<tr><td>" . $key->nombre . "</td></tr>");
}
echo ("</table><br>");


$club->incluirJuego("God of War", 19.99, "PS4", 1, 1);
$club->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$club->incluirDvd("Torrente", 4.5, "es", "16:9");
$club->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
$club->incluirDvd("El Imperio Contraataca", 3, "es,en", "16:9");
$club->incluirCintaVideo("Los cazafantasmas", 3.5, 107);
$club->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);

foreach ($club->getProductos() as $key) {
    $productos[$key->titulo] = $key;
}

$_SESSION['productos'] = $productos;
echo ("Productos:<table border='1'>");
foreach ($_SESSION["productos"] as $key) {
    echo ("<tr><td>" . $key->titulo . "</td></tr>");
}
echo ("</table>");
