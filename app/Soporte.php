<?php
    /* Al hacerla abstracta conseguimos que no se pueda instanciar ningun onjeto de la propia clase */
    /* El programa no se ve afectado ya que no estamos instanciando ningun objeto de la clase Soporte */
    /* No es necesario implementar la interfaz Resumible en los hijos porque lo heredan automáticamente del padre */
    include "Resumible.php";
    abstract class Soporte implements Resumible{
        public $titulo;
        protected $numero;
        private $precio;
        private static $IVA = 0.21;//Constante del IVA
        private static $codigoProducto = 1;

        public function __construct($t, $p)
        {
            $this->titulo = $t;
            $this->precio = $p;
            $this->numero = self::$codigoProducto;
            self::$codigoProducto++;
        }

        //Metodo para obtener el precio
        public function getPrecio()
        {
            return $this->precio;
        }

        //Metodo para obtener el numero
        public function getNumero() 
        {
            return $this->numero; 
        }

        //Metodo para obtener el codigo del producto
        public function getCodigoProducto() 
        {
            return self::$codigoProducto; 
        }

        //Metodo que calcula el precio con el IVA
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