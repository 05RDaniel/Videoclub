<?php
    class Soporte {
        public $titulo;
        protected $numero;
        private $precio;
        private static $IVA = 0.21;

        public function __construct($t, $n, $p)
        {
            $this->titulo = $t;
            $this->numero = $n;
            $this->precio = $p;  
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        public function getNumero() 
        {
            return $this->numero; 
        }

        public function getPrecioIVA() 
        {
            $precio_iva = $this->precio * self::$IVA;
            $precio_iva_total = $this->precio + $precio_iva;
            return $precio_iva_total;
        }

        public function muestraResumen()
        {
            echo "Numero: " . $this->getNumero() . "<br>" . "Precio: " . $this->getPrecio() . "<br>" . "Precio con iva: " . $this->getPrecioIVA() . "</p>";
        }
    }
?>