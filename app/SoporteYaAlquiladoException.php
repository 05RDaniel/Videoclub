<?php
    namespace Videoclub\app;
    include_once "VideoclubException.php";

    class SoporteYaAlquiladoException extends VideoclubException {
        function yaAlquiladoExcepcion(){
            echo "El soporte ya esta alquilado.";
        }
    }
?>