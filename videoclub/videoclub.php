<?php
    include "./app/Soporte.php";
    Class Videoclub
    {
        private $nombre;
        private $productos = array();
        private $numProductos;
        private $socios = array();
        private $numSocios;

        public function __construct($n, $p, $np, $s, $ns)
        {
            $this->nombre = $n;
            $this->productos = $p;
            $this->numProductos = $np;
            $this->socios = $s;
            $this->numSocios = $ns;
        }

        private function incluirProducto(Soporte $object) {
            array_push($this->productos, $object);
        }

        public function incluirCintaVideo($titulo, $precio, $duracion) {
            $cinta = new CintaVideo($titulo, $precio, $duracion);
            $this->incluirProducto($cinta);
        }

        public function incluirDVD($titulo, $precio, $idiomas, $pantalla) {
            $dvd = new DVD($titulo, $precio, $idiomas, $pantalla);
            $this->incluirProducto($dvd);
        }

        public function incluirJuego($titulo, $precio, $consola, $minJ, $maxJ) {
            $juego = new Juego($titulo, $precio, $consola, $minJ, $maxJ);
            $this->incluirProducto($juego);
        }
    }
?>