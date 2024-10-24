<?php
    namespace Videoclub\app;
    include_once "VideoclubException.php";

    class CupoSuperadoException extends VideoclubException {
        function cupoSuperadoExcepcion(){
            echo "El cupo en la lista ha sido superado.";
        }
    }
?>