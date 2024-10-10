<?php
    Class Juego extends Soporte
    {
        public function __construct($t, $n, $p, public $console, private $minNumJugadores, private $maxNumJugadores)
        {
            parent::__construct($t, $n, $p);
        }

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
            echo "<p>Tipo de consola: " . $this->console . " Numero de jugadores: " . $this->muestraJugadoresPosibles() . "</p>";
        }
    }
?>