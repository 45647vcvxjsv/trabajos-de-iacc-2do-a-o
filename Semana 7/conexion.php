<?php
      $host = 'localhost';
      $port = '5432'; 
      $dbname = 'postgres';
      $user = 'postgres';
      $password = '1234';

    try {
      $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
      echo "Conexión exitosa, a la base de la escuela";
    } catch (PDOException $e) {
      echo "Error de conexión: " . $e->getMessage();
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Notas</title>
</head>
<body>
  <h2> Prueba de conexion </h2>
</body>
</html>

 