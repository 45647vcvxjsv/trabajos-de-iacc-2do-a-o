<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Vehiculo </title>
</head>
<body>

<h2>Agregar Vehículo</h2>
    <form action="Concesionario.php" method="post">
      Marca: <input type="text" name="marca"><br>
      Modelo: <input type="text" name="modelo"><br>
      Año: <input type="text" name="ano"><br>
      Patente: <input type="text" name="Patente"><br>
      <input type="submit" value="Ingresar">
    </form>

  <?php

  function agregarveh($patente,$modelo,$marca,$ano,$color){
    global $sconn;
    $sql = "INSERT INTO auto (patente, marca, modelo, ano, color) VALUES (?, ?, ?, ?, ?)";
    try {
      $stmt = $sconn->prepare($sql);
        $stmt->bindParam(1, $patente);
        $stmt->bindParam(2, $marca);
        $stmt->bindParam(3, $modelo);
        $stmt->bindParam(4, $ano);
        $stmt->bindParam(5, $color);
        $stmt->execute();
      return "Nuevo Vehiculo Ingresado";
    }catch (PDOException $e) {
    return "No Vehiculo, no ha sido ingresado". $e->getMessage();
  }
}
?>
</body>
</html>
