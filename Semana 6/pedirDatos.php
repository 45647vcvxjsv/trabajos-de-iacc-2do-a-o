<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar las bases de datos </title>
    </head>
  <body>
    
  <h2>Consultar Vehiculo</h2>
    <form action="Concesionario.php" method="post">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca"><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo"><br><br>
        
        <label for="anio">Año:</label>
        <input type="text" id="anio" name="anio"><br><br>
        
        <label for="precio">Color:</label>
        <input type="text" id="Color" name="Color"><br><br>
        
        <input type="submit" value="Insertar Auto">
    </form>

    <h2>Consultar Cliente</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        
        <input type="submit" value="Insertar Cliente">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $dsn = "pgsql:host=localhost;port=5432;dbname=Concesionario;user=postgres;password=1234";

      try{
        $conexion = new PDO($dsn);
        echo "te conectaste a la concesionaria <br>";

        $consulta = $conexion->query("SELECT *FROM auto");
        $consulta2 = $conexion->query("SELECT *FROM Clientes");

        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $resultados2 = $consulta2->fetchAll(PDO::FETCH_ASSOC);

        echo"<pre>";
        echo"resultados de la primera";
        print_r($resultados);

        echo"resultados de la segunda";
        print_r($resultados2);
        echo"</pre>";
      } catch(PDOException $e){
        echo "error de conexion". $e->getMessage();
      }
    }
    ?>
  </body>
</html>