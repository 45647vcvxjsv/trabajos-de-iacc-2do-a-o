<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concesionario</title>
</head>
<body>
  <h2> Prueba de conexion </h2>
    <?php
      $host = 'localhost';
      $port = '5432'; 
      $dbname = 'Concesionario';
      $user = 'postgres';
      $password = '1234';

    try {
      $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
      echo "Conexión exitosa, a la base de la concesionaria";
    } catch (PDOException $e) {
      echo "Error de conexión: " . $e->getMessage();
  }
  ?>

</body>
</html>

