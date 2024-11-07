<?php
namespace Videoclub\app;

class Cliente
{
    public $nombre;
    private $numero;
    private $soportesAlquilados = [];
    private $numSoportesAlquilados;
    private $maxAlquilerConcurrente;
    private static $numTotal = 1;

    public function __construct($n, $mAC = 3)
    {
        $this->nombre = $n;
        $this->numero = self::$numTotal;
        self::$numTotal++;
        $this->maxAlquilerConcurrente = $mAC;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
        return $this;
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

    public function alquilar(Soporte $s): Cliente
    {
        if (count($this->soportesAlquilados) < $this->maxAlquilerConcurrente) {
            if (!$this->tieneAlquilado($s)) {
                $this->soportesAlquilados[] = $s;
                $this->numSoportesAlquilados++;
                $s->alquilado=true;
            } else {
                throw new SoporteYaAlquiladoException("El soporte ya se encuentra alquilado.");
            }
        } else {
            throw new CupoSuperadoException("Se ha superado el cupo de soportes.");
        }
        return $this;
    }

    public function devolver(int $NumSoporte): bool 
    {
        $found = -1;
        for ($i = 0; $i < count($this->soportesAlquilados); $i++) {
            if ($this->soportesAlquilados[$i]->getNumero() == $NumSoporte) {
                $found = $i;
            }
        }
        if ($found > -1){
            $this->soportesAlquilados[$i]->alquilado = false;
            array_splice($this->soportesAlquilados,$i,1);
            $this->numSoportesAlquilados--;
            echo "Elemento devuelto<br>";
            return true;
        } else {
            throw new SoporteNoEncontradoException("El elemento no está alquilado por este usuario");
        }
    }

    public function listaAlquileres(): Cliente{
        echo "El usuario tiene ".count($this->soportesAlquilados)." soportes alquilados:<ul>";
        foreach ($this->soportesAlquilados as $val) {
            echo "<li>".$val->titulo."</li>";
            }
            echo "</ul>";
            return $this;
    }
}
