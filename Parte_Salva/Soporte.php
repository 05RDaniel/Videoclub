<?php
    class Soporte {
        public $titulo;
        protected $numero;
        private $precio;
        private static const IVA = 0.21;

        public function __construct($t, $n, $p)
        {
            $this->titulo = $t;
            $this->numero = $n;
            $this->precio = $p;  
        }

        public function getPrecio($name)
        {
            if ($name == 'pre') {
                return $this->precio;
            }
        }

        public function getNumero($name) 
        {
            if ($name == 'num') {
                return $this->numero;
            }
        }

        public function getPrecioIVA() 
        {
            $precio_iva = $this->precio * self::IVA;
            $precio_iva_total = $this->precio + $precio_iva;
            echo $precio_iva_total;
        }

        public function muestraResumen()
        {
            echo "<p>Titulo: $this->titulo<br>" . "Numero: $this->numero<br>" . "Precio: $this->precio<br>" . "Precio con iva: </p>";
        }
    }
?>