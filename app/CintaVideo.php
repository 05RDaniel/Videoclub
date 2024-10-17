<?php
    include_once "Soporte.php";
    Class CintaVideo extends Soporte
    {
        public function __construct($t, $p, private $duracion)
        {
            parent::__construct($t, $p);
            parent::getCodigoProducto();
        }

        public function muestraResumen()
        {
            parent::muestraResumen();
            echo "<p>Duracion: " . $this->duracion . "</p>";
        }

    }
?>