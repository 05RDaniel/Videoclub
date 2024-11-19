<?php
    session_start();
    include "./mainAdmin.php";
    include "./mainCliente.php";

    $updateName =  $_POST["updateName"];
    $updateUser =  $_POST["updateUser"];
    $updateRent = $_POST["updateRent"];
    $updatePassword =  $_POST["updatePassword"];

    $_SESSION['usuario'] = $usuario;
    $_SESSION['password'] = $password;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $error = [];
        if (empty($updateName)) {
            $error[] = "El campo nombre esta vacio.";
        }
        if (empty($updateUser)) {
            $error[] = "El campo usuario esta vacio.";
        }
        if (empty($updateRent)) {
            $error[] = "El campo actualizar soportes simultaneos esta vacio.";
        }
        if (empty($updatePassword)) {
            $error[] = "El campo contraseña esta vacio.";
        }
        if (!empty($error)) {
            foreach ($error as $err) {
                echo $error . "<br>";
            }
        }
    }
?>