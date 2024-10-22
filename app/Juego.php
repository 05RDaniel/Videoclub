<?php
    namespace Videoclub\app;
    include_once "Soporte.php";
    Class Juego extends Soporte
    {
        public function __construct($t, $p, public $console, private $minNumJugadores, private $maxNumJugadores)
        {
            parent::__construct($t, $p);
            parent::getCodigoProducto();
        }

        //Metodo que comprueba el numero de jugadores que pueden jugar a los juegos
        public function muestraJugadoresPosibles() {
            if ($this->minNumJugadores == 1 && $this->maxNumJugadores == 0) {
                echo "El juego es para 1 jugador.";
            } else if ($this->minNumJugadores == 0 && $this->maxNumJugadores > 1) {
                echo "El juego es para " . $this->maxNumJugadores . " jugadores.";
            } else if ($this->minNumJugadores != 0 && $this->maxNumJugadores != 0) {
                echo "El juego es de " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores.";
            } else {
                echo "El juego no es valido.";
            }
        }

        public function muestraResumen()
        {
            parent::muestraResumen();
            echo "<p>Tipo de consola: " . $this->console . "<br>" . $this->muestraJugadoresPosibles() . "</p>";
        }
    }
?>