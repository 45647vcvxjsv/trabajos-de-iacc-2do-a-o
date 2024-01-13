<?php

class Operation {

    public $morocha1 = 0;
    public $morocha2 = 0;
    public $resultado = 0;

    function __construct($intmorocha1, $intmorocha2) {

        $this->morocha1 = $intmorocha1;
        $this->morocha2 = $intmorocha2;
    }

    public function getSuma() {

        $this->resultado = $this->morocha1 + $this->morocha2;
        return $this->resultado;
    }

    public function getResta() {

        $this->resultado = $this->morocha1 - $this->morocha2;
        return $this->resultado;
    }

    public function getMultiplicar() {

        $this->resultado = $this->morocha1 * $this->morocha2;
        return $this->resultado;
    }

    public function getDiv() {

        $this->resultado = $this->morocha1 / $this->morocha2;
        return $this->resultado;
    }
}

?>