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

        private function incluirProducto(Soporte $productos) {
            
        }

        public function incluirCintaVideo($titulo, $precio, $duracion) {
            $cinta = new CintaVideo()
        }
    }
?>