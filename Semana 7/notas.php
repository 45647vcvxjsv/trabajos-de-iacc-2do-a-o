<?php
class notas{
  private $conn;
  private $table_name = 'notas';

   public $gradocurso;
   public $id_estudiante;
   public $id_curso;
   public $nota;

   public function __construct($db,$gradocurso, $id_estudiante, $id_curso, $nota) {
    $this->conn = $db;
    $this->$gradocurso = $gradocurso ['gradocurso'];
    $this->$id_estudiante = $id_estudiante['id_estudiante'];
    $this->$id_curso = $id_curso['id_curso'];
    $this->$nota = $nota['nota'];
  }
  public function getgradocurso() {
    return $this->gradocurso;
  }
  public function setgradocurso(){
    return $this->gradocurso;
  }
  
  public function getId_estudiante($id_estudiante){
    $this->id_estudiante = $id_estudiante;
  }
  public function setId_estudiante(){
    return $this->id_estudiante;
  }
  public function getId_curso(){
    return $this->id_curso;
  }
  
  public function setId_curso($id_curso){
    $this->id_curso = $id_curso;
  }
  
  public function getnota(){
    return $this->nota;
  }
  
  public function setnota($nota){
    $this->nota = $nota;
  }
  
  function leer(){
    $query = 'SELECT * FROM notas'. $this->table_name;
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
  <title>Consultar Libro de notast</title>
</head>
<body>
  <form action="conexion.php"></form>
</body>
</html>


