<?php
session_start();

$nombre =  $_POST["nombre"];
$usuario =  $_POST["usuario"];
$password =  $_POST["password"];

$_SESSION['usuario'] = $usuario;
$_SESSION['password'] = $password;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = [];
    if (empty($nombre)) {
        $error[] = "El campo nombre esta vacio.";
    }
    if (empty($usuario)) {
        $error[] = "El campo usuario esta vacio.";
    }
    if (empty($password)) {
        $error[] = "El campo contraseña esta vacio.";
    }
    if (!empty($error)) {
        foreach ($error as $err) {
            echo $error . "<br>";
        }
    }
}

if (isset($nombre) && isset($usuario) && isset($password)) {
    header("Location: ./mainAdmin.php");
} else {
    header("Location: ./formCreateCliente.php");
}
?>