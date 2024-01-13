<?php

class Vehiculo2 {
    public $modelo;
    public $Anodelvehiculo;

    public function __construct($modelo, $Anodelvehiculo) {
        $this->modelo = $modelo;
        $this->Anodelvehiculo = $Anodelvehiculo;
    }

    public function obtenerInformacion() {
        return "Anodevehiculo : {$this->Anodelvehiculo}, Modelo: {$this->modelo}";
    }
}

// Métodos abstractos

class Bmw extends Vehiculo2 {
    public function Arrancar() {
        return "Prendiendo motor ";
    }

    public function Detener() {
        return "Deteniendo motor ";
    }
}

$mivehiuculo = new Vehiculo2("Bmw 128ti", 1998);

echo $mivehiuculo->obtenerInformacion();

?>
