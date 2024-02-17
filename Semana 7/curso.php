<?php

class curso{
  private $conn;
  private $table_name = 'curso';

  public $id_curso;
  public $nombre_curso;
  public $descripcion;
  public $profesor;

  public function __construct($db, $id_curso, $nombre_curso, $descripcion, $profesor) {
    $this->$db = $db;
    $this->$id_curso = $id_curso['Curso'];
    $this->$nombre_curso = $nombre_curso['Nombre de Curso'];
    $this->$descripcion = $descripcion['Descripcion'];
    $this->$profesor = $profesor['Profesor'];
  }
  public function getid_curso(){
    return $this->id_curso;
  }
  public function setid_curso(){
    return $this->id_curso;
  }
  public function getnombre_curso(){
    return $this->nombre_curso;
  }
  public function setnombre_curso(){
    return $this->nombre_curso;
  } public function getdescripcion(){
    return $this->descripcion;
  }
  public function setdescripcion(){
    return $this->descripcion;
  } public function getprofesor(){
    return $this->profesor;
  }
  public function setprofesor(){
    return $this->profesor;
  }
  public function leer(){
    $query = 'SELECT * FROM curso'. $this->table_name;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultas de Cursos De la Escuela</title>
</head>
<body>
  <form action="conexion.php"></form>

</body>
</html>