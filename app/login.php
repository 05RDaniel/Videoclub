<?php
include "../autoload.php";

use Videoclub\app\Videoclub;

$club = new Videoclub("Maria");

$club->incluirSocio("Amancio", "amancio");
$club->incluirSocio("Pablo Picasso", "pablo", 2);


foreach ($club->getSocios() as $key) {
  if ($key->nombre == $_POST["usr"] && $key->getContraseña() == $_POST["pswd"]) {
    header("Location: mainCliente.php?usuario=".$key->nombre);
  }
}

if (!$check){
  if ($_POST["usr"] ==  "admin" && $_POST["pswd"] == "admin") {
    header("Location: mainAdmin.php");
  } elseif ($_POST["usr"] ==  "usuario" && $_POST["pswd"] == "usuario") {
    echo ("usuario ha iniciado sesión");
  } else {
    $error = "Usuario y/o contraseña incorrectos";
    include "index.php";
  }
}
