<?php

class Vehiculo {
    public $marca;
    public $modelo;
    public $color;
    public $anodediseno;
    public $puertas;

    public function __construct($marca, $modelo, $color, $anodediseno, $puertas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->anodediseno = $anodediseno;
        $this->puertas = $puertas;
    }
} 

$vehiculo1 = new Vehiculo("Lada", "Escarabajo", "Beige", 1998, 4);
$vehiculo2 = new Vehiculo("BMW", "Coupe", "Gris plateado", 2023, 6);

?>



