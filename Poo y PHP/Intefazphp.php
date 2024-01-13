<?php

interface Milampara {

    public function apagar();
    public function encender();
}

class Prendiendolalampara implements Milampara {

    public function apagar() 
    {
        echo " Voy a apagar la lampara 3\n";
    }
    public function encender()
    {
        echo "Voy a encender la lampara 3\n";
    }

}

$miintefaz = new Prendiendolalampara();

$miintefaz->apagar();
$miintefaz->encender();


?>