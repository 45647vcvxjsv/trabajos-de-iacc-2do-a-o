<?php

class Anonima {
    private $Nombreveh;

    public function __construct($valor) {

        $this->Nombreveh = $valor;

    }

    public function getPropiedad() {
        return $this->Nombreveh;
    }

}

$propiedad = "Nissan centra";


$miclaseanonima = new Anonima($propiedad);

$propiedad = $miclaseanonima->getPropiedad();
echo $propiedad;


?>