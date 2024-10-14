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

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
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
            foreach ($this->soportesAlquilados as $val) {
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
                echo "Elemento añadido satisfactoriamente<br>";
                return true;
            } else {
                echo "El elemento ya se encuentra alquilado por este usuario<br>";
            }
        } else {
            echo "Número de alquileres máximo alcanzado, no es posible añadir más<br>";
        }
        return false;
    }

    public function devolver(int $NumSoporte): void 
    {
        $found = -1;
        for ($i=0;$i<count($this->soportesAlquilados);$i++){
            if ($this->soportesAlquilados[$i]->getNumero()==$NumSoporte){
                $found = $i;
            }
        }
        if ($found > -1){
            unset($this->soportesAlquilados[$i]);
            $this->numSoportesAlquilados--;
            echo "Elemento devuelto<br>";
        } else {echo "El elemento no está alquilado por este usuario<br>";}
    }

    public function listaAlquileres(){
        echo "El usuario tiene ".count($this->soportesAlquilados)." soportes alquilados:<ul>";
        foreach ($this->soportesAlquilados as $val) {
            echo "<li>".$val->titulo."</li>";
            }
            echo "</ul>";
    }
}
