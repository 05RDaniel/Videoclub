<?php
    Class CintaVideo extends Soporte
    {
        public function __construct($t, $p, private $duracion)
        {
            parent::__construct($t, $p);
        }

        public function muestraResumen()
        {
            parent::muestraResumen();
            echo "<p>Duracion: " . $this->duracion . "</p>";
        }

    }
?>