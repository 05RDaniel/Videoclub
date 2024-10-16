<?php
<<<<<<< HEAD
    include_once "Soporte.php";
    Class CintaVideo extends Soporte
    {
        public function __construct($t, $p, private $duracion)
=======
    Class DVD extends Soporte
    {
        public function __construct($t, $p, public $idiomas, private $formatPantalla)
>>>>>>> c23b803d7a949429725dbc0df5343bdad77a83ca
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