<?php

class Empleado
{
    private string $nombre;
    private string $salario;

    /**
     * @param String $nombre
     * @param String $salario
     */
    public function __construct(string $nombre, string $salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function datos(): string
    {
        if ($this->salario > 2000) {
            return "El empleado " . $this->nombre . " tiene como salario " . $this->salario . " tiene que pagar impuestos.";
        } else {
            return "El empleado " . $this->nombre . " tiene como salario " . $this->salario . " no tiene que pagar impuestos.";
        }

    }
}

$Alejandro = new Empleado("Lorenzo", "1450");
echo $Alejandro->datos();
echo '<br>';
$Maria = new Empleado("Maria", "3000");
echo $Maria->datos();