<?php
namespace Videoclub\app;
include_once "../app/Soporte.php";
include_once "../app/Juego.php";
include_once "../app/CintaVideo.php";
include_once "../app/DVD.php";
include_once "../app/Cliente.php";
class Videoclub
{
    private $nombre;
    private $productos = array();
    private $numProductos;
    private $socios = array();
    private $numSocios;
    private $numProductosAlquilados = 0;
    private $numTotalAlquileres = 0;

    public function __construct($n)
    {
        $this->nombre = $n;
    }

    private function incluirProducto(Soporte $object) {
        array_push($this->productos, $object);
        echo "Incluido soporte".$object->getNumero()."<br>";
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

    public function incluirSocio($n, $mAC = 3)
    {
        $s = new Cliente($n, $mAC);
        array_push($this->socios, $s);
        $this->numSocios++;
    }

    public function listarProductos()
    {
        echo "Listado de los ".count($this->productos)." productos<br>";
        foreach ($this->productos as $p) {
            $p->muestraResumen();
        }
    }

    public function listarSocios()
    {
        foreach ($this->socios as $p) {
            echo  $p->nombre . "<br>";
        }
    }

    public function alquilaSocioProducto($numSocio, array $numerosProductos)
    {
        $alquilado = false;
        foreach ($this->socios as $c) {
            if ($c->getNumero() == $numSocio) {
                foreach ($numerosProductos as $n) {
                    if($n->alquilado == true){
                        $alquilado=true;
                    }
                }
                if ($alquilado == false){
                    foreach ($this->productos as $p) {
                        foreach($numerosProductos as $n){
                            if ($p->getNumero() == $n) {
                                $c->alquilar($p);
                                $this->numTotalAlquileres++;
                            }
                        }
                    }
                    echo "Soportes alquilados exitosamente<br>";
                } else {echo "Uno de los productos ya está alquilado, proceso descartado<br>";}
            }
        }
        return false;
    }

    public function getNumProductosAlquilados(){
        foreach ($this->productos as $p) {
            if($p->alquilado){
                $this->numProductosAlquilados++;
        }
    }
    }

    public function getNumeTotalAlquileres(){
        return $this->numTotalAlquileres;
    }
}