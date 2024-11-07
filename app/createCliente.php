<?php
   $nombre =  $_POST["nombre"];
   $usuario =  $_POST["usuario"];
   $password =  $_POST["password"];

   if(!empty($_POST)) {
    echo "<p>Submitted.</p>";
   }

   if (isset($nombre)) {
    if (empty($nombre)) {
        echo "<p>El campo Nombre esta vacio.</p>";
    }
    if(empty($usuario)) {
        echo "<p>El campo Usuario esta vacio.</p>";
    }
    if(empty($password)) {
        echo "<p>El campo Contraseña esta vacio.</p>";
    }
   } 
?>