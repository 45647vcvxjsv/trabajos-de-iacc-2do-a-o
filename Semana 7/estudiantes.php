<?php

class estudiantes {
  private $conn;
  private $table_name = 'estudiantes';

  public $id_estudiante;
  public $nombre;
  public $apellido;
  public $fechadenacimiento;
  public $direccion;

  public function __construct($db, $id_estudiante, $nombre, $apellido, $fechadenacimiento, $direccion) {
    $this->conn = $db;
    $this->id_estudiante = $id_estudiante;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->fechadenacimiento = $fechadenacimiento;
    $this->direccion = $direccion;
  }
  
  public function getId_estudiante() {
    return $this->id_estudiante;
  }
  
  public function setId_estudiante($id_estudiante){
    $this->id_estudiante = $id_estudiante;
  }
  
  public function getNombre(){
    return $this->nombre;
  }
  
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  
  public function getApellido(){
    return $this->apellido;
  }
  
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  
  public function getFechadenacimiento(){
    return $this->fechadenacimiento;
  }
  
  public function setFechadenacimiento($fechadenacimiento){
    $this->fechadenacimiento = $fechadenacimiento;
  }
  
  public function getDireccion(){
    return $this->direccion;
  }
  
  public function setDireccion($direccion){
    $this->direccion = $direccion;
  }

  public function leer(){
    $query = 'SELECT * FROM estudiantes' . $this->table_name;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $query;
  }
}

// objetos de la clase estudiantes
$estudiantenuevo1 = new estudiantes(null, 1, "Juana", "Berrios", "19-12-1994", "Hualpen33");
$estudiantenuevo2 = new estudiantes(null, 2, "Nicolas", "Lopez", "23-01-1999", "General33");

?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libro de Asistencia</title>
</head>
<body>
  
</body>
</html>