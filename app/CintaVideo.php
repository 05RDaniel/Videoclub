<?php
    namespace Videoclub\app;
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
            echo "<br>Duracion: " . $this->duracion . "<br>";
        }

    }
?>