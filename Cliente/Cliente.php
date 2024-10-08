<?php
class Cliente
{
    public $nombre;
    private $numero;
    private $soportesAlquilados = [];
    private $numSoportesAlquilados;
    private $maxAlquilerConcurrente;

    public function __construct($n, $num, $mAC = 3)
    {
        $this->nombre = $n;
        $this->numero = $num;
        $this->maxAlquilerConcurrente = $mAC;
    }

    public function getNombre(){
            return $this->nombre;
    }
    public function setNombre($n){
        $this->nombre = $n;
    }
    public function getNumSoportesAlquilados(){
            return $this->numSoportesAlquilados;
    }

    public function muestraResumen(){
        for ($i=0;$i<=count($soportesAlquilados);$i++){
            echo "Nombre del cliente: $this->nombre \n";
        }
    }
}
?>