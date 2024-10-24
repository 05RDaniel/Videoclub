<?php
    namespace Videoclub\app;
    include_once "VideoclubException.php";

    class SoporteNoEncontradoException extends VideoclubException {
        function missingSoporteExcepcion(){
            echo "No se encuentra el soporte en la base de datos.";
        }
    }
?>