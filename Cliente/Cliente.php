<?php
include "Soporte.php";
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

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($n)
    {
        $this->nombre = $n;
    }

    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    public function muestraResumen()
    {
        echo "Nombre: $this->nombre\n";
        echo "Número: ", count($this->soportesAlquilados), "\n";
    }

    public function tieneAlquilado(Soporte $s): bool
    {
        if (empty($this->soportesAlquilados)) {
            return false;
        } else {
            foreach ($soportesAlquilados as $val) {
                if ($val == $s) {
                    return true;
                }
            }
        }
        return false;
    }

    public  function alquilar(Soporte $s): bool
    {
        if (count($this->soportesAlquilados) < $this->maxAlquilerConcurrente) {
            if (!$this->tieneAlquilado($s)) {
                $this->soportesAlquilados[] = $s;
                $this->numSoportesAlquilados++;
                return true;
                echo "Elemento añadido satisfactoriamente";
            } else {
                echo "El elemento ya se encuentra alquilado por este usuario";
            }
        } else {
            echo "Número de alquileres máximo alcanzado, no es posible añadir más";
        }
        return false;
    }

    public function devolver(int $NumSoporte): void 
    {
        $found = -1;
        for ($i=0;$i<count($soportesAlquilados);$i++){
            if ($soportesAlquilados[$i]['numero']==$NumSoporte){
                $found = $i;
            }
        }
        if ($found > -1){
            unset($soportesAlquilados[$i]);
            $this->numSoportesAlquilados--;
            echo "Elemento devuelto";
        } else {echo "El elemento no está alquilado por este usuario";}
    }

    public function listarAlquileres(){
        echo "El usuario tiene ".count($soportesAlquilados)." soportes alquilados<br>";
        foreach ($this->soportesAlquilados as $val) {
            echo $val->titulo.", ";
            }
    }
}
