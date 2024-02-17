<?php 

class profesores {
  private $conn;
  private $table_name = 'profesores';
  public $id_profesor;
  public $nombre;
  public $apellido;
  public $especializacion;

  public function __construct($db, $id_profesor, $nombre, $apellido, $especializacion) {
    $this->conn = $db;
    $this->id_profesor = $id_profesor;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->especializacion = $especializacion;
  }

  public function getIdprofesor() {
    return $this->id_profesor;
  }
  
  public function setIdprofesor($id_profesor) {
    $this->id_profesor = $id_profesor;
  }

  public function getnombre() {
    return $this->nombre;
  }
  
  public function setnombre($nombre){
    $this->nombre = $nombre;
  }

  public function getapellido() {
    return $this->apellido;
  }
  
  public function setapellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getespecializacion() {
    return $this->especializacion;
  }
  
  public function setespecializacion($especializacion) {
    $this->especializacion = $especializacion;
  }

  public function leer() {
    $query = 'SELECT * FROM ' . $this->table_name;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}

// objetos de la clase profesores
$nuevoprofesor1 = new profesores(null, 101, "Natalia", "Barrientos", "Geologia");
$nuevoprofesor2 = new profesores(null, 102, "Lecaros", "Czo", "Educacion Fisica");
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Libro de Profesores</title>
</head>
<body>
  <form action="conexion.php"></form>
  <form>
  <div class="mb-3">
    <label for="id_profesor" class="form-label">ID_Profesor</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">.</div>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre Profesor</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido Profesor</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="especializacion" class="form-label">Especializacion</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar Datos</button>
</form>
</body>
</html>