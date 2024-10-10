<?php
    Class DVD extends Soporte
    {
        public function __construct($t, $n, $p, public $idiomas, private $formatPantalla)
        {
            parent::__construct($t, $n, $p);
        }

        public function muestraResumen()
        {
            parent::muestraResumen();
            echo "<p>Idiomas disponibles: " . $this->idiomas . " Formato de la pantalla: " . $this->formatPantalla . "</p>";
        }
    }
?>