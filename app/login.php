<?php
include "../autoload.php";

use Videoclub\app\Videoclub;

$club = new Videoclub("Maria");

$club->incluirSocio("Amancio", "amancio");
$club->incluirSocio("Pablo Picasso", "pablo", 2);


foreach ($club->getSocios() as $key) {
  if ($key->nombre == $_POST["usr"] && $key->getContraseña() == $_POST["pswd"]) {
    header('Location: mainCliente.php?usuario='.$_POST['usr']);
    exit;
  }
}

  if ($_POST["usr"] ==  "admin" && $_POST["pswd"] == "admin") {
    header("Location: mainAdmin.php");
    exit;
  } elseif ($_POST["usr"] ==  "usuario" && $_POST["pswd"] == "usuario") {
    header('Location: mainCliente.php?usuario='.$_POST['usr']);
    exit;
  } else {
    $error = "Usuario y/o contraseña incorrectos";
    include "index.php";
  }