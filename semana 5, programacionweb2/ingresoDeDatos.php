<?php

class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $anio;
    private $color;

    // Métodos SET
    public function setPatemte($matricula) {
        $this->patente = $matricula;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setAnio($anio) {
        $this->anio = $anio;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // Métodos GET
    public function getPatente() {
        return $this->patente;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getColor() {
        return $this->color;
    }
}

// Procesar datos del formulario
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $auto = new Auto();

    $auto->setPatemte($_POST['patente']);
    $auto->setMarca($_POST['marca']);
    $auto->setModelo($_POST['modelo']);
    $auto->setAnio($_POST['anio']);
    $auto->setColor($_POST['color']);

    // Mostrar valores utilizando métodos GET
    echo "<h2>Información del Automóvil Registrado:</h2>";
    echo "<p>Matrícula: " . $auto->getPatente() . "</p>";
    echo "<p>Marca: " . $auto->getMarca() . "<p>";
    echo "<p>Marca: " . $auto->getModelo() . "<p>";
    echo "<p>Marca: " . $auto->getAnio() . "<p>";
    echo "<p>Marca: " . $auto->getColor() . "<p>";
}else {
  echo "Acceso no permitido";
}