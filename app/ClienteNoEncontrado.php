<?php
    namespace Videoclub\app;
    include_once "VideoclubException.php";

    class ClienteNoEncontradoException extends VideoclubException {
        function missingCustomerExcepcion(){
            echo "El cliente introducido no existe.";
        }
    }
?>