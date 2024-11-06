<?php
  if ($_POST["usr"] ==  "admin" && $_POST["pswd"] == "admin") {
    echo("admin ha iniciado sesión");
  } elseif ($_POST["usr"] ==  "usuario" && $_POST["pswd"] == "usuario") {
    echo("usuario ha iniciado sesión");
  } else {
    header("Location: index.html");
  }
?>