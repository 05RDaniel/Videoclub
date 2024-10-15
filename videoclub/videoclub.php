<?php
include "../app/Soporte.php";
include "../Cliente/Cliente.php";
class Videoclub
{
    private $nombre;
    private $productos = array();
    private $numProductos;
    private $socios = array();
    private $numSocios;

    public function __construct($n)
    {
        $this->nombre = $n;
    }

    public function incluirSocio($n, $mAC = 3)
    {
        $s = new Cliente($n, $mAC);
        array_push($this->socios, $s);
        $this->numSocios++;
    }

    public function listarProductos()
    {
        foreach ($this->productos as $p) {
            echo  $p->getNombre() . "<br>";
        }
    }

    public function listarSocios()
    {
        foreach ($this->socios as $p) {
            echo  $p->nombre . "<br>";
        }
    }

    public function alquilaSocioProducto($numeroCliente, $numeroSoporte)
    {
        foreach ($this->socios as $c) {
            if ($c->getNumero() == $numeroCliente) {
                foreach ($this->productos as $p) {
                    if ($p->getNumero() == $numeroSoporte) {
                        $c->alquilar($p);
                        echo "Soporte alquilado exitosamente<br>";
                        return true;
                    }
                }
            }
        }
        echo "No se ha podido alquilar el soporte<br>";
        return false;
    }
}
