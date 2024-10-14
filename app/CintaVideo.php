<?php
    Class CintaVideo extends Soporte
    {
        public function __construct($t, $n, $p, private $duracion)
        {
            parent::__construct($t, $n, $p);
        }

        public function muestraResumen()
        {
            parent::muestraResumen();
            echo "<p>Duracion: " . $this->duracion . "</p>";
        }

    }
?>