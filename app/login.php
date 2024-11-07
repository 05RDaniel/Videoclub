<?php
  if ($_POST["usr"] ==  "admin" && $_POST["pswd"] == "admin") {
    header("Location: mainAdmin.php");
  } elseif ($_POST["usr"] ==  "usuario" && $_POST["pswd"] == "usuario") {
    echo("usuario ha iniciado sesión");
  } else {
    $error = "Usuario y/o contraseña incorrectos";
    include "index.php";
  }
?>