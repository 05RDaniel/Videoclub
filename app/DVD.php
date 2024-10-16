<?php
    include_once "Soporte.php";
    Class DVD extends Soporte
    {
        public function __construct($t, $p, public $idiomas, private $formatPantalla)
        {
            parent::__construct($t, $p);
            parent::getCodigoProducto();
        }

        public function muestraResumen()
        {
            parent::muestraResumen();
            echo "<p>Idiomas disponibles: " . $this->idiomas . "<br>" . " Formato de la pantalla: " . $this->formatPantalla . "</p>";
        }
    }
?>