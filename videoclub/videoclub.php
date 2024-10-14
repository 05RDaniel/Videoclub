<?php
include "./Videoclub/app/Soporte.php";
include "./Videoclub/Cliente/Cliente.php";
    class Videoclub
    {
        private $nombre;
        private $productos = array();
        private $numProductos;
        private $socios = array();
        private $numSocios;
    
        public function __construct($n, $p, $np,  $s, $ns)
        {
            $this->nombre = $n;
            $this->productos = $p;
            $this->numProductos = $np;
            $this->socios = $s;
            $this->numSocios = $ns;
        }

        public function incluirSocio($n, $mAC=3) {
            $s = new Cliente($n,$mAC);
        }
    }
?>