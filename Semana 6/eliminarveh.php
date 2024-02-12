<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Eliminar Vehiculo </title>
</head>
<body>

  <h2>Eliminar Vehículo</h2>
    <form action="Concesionario.php" method="post">
      ID del Vehículo a Eliminar: <input type="text" name="id"><br>
      <input type="submit" value="Eliminar">
    </form>

  <?php

    function Eliminarveh($id){
      global $sconn;
      $sql = "DELETE FROM auto WHERE id=?";
      $stmt= $sconn->prepare([$id]);
      try{
        $stmt->execute([$id]);
        return "Vehiculo eliminado de la base de datos";
      }catch (PDOException$e){
        return "No fue posibles eliminar el vehiculo seleccionado". $e->getMessage();
      }
    }
  ?>
</body>
</html>