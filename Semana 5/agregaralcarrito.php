<?php
session_start();

// Verificar si se proporciona un ID de libro válido
if(isset($_GET['agregar']) && is_numeric($_GET['agregar'])) {
  $idLibro = $_GET['agregar'];

    
  if(!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = array();
  }

    
  if(array_key_exists($idLibro, $libros)) {      
    if (!isset($_SESSION['carritodecompra'][$idLibro])) {
      $_SESSION['carritodecompra'][$idLibro] = array(
        'titulo' => $libros[$idLibro]['titulo'],
        'precio' => $libros[$idLibro]['precio'],
        'cantidad' => 1,
        );
        } else {
          $_SESSION['carritodecompra'][$idLibro]['cantidad']++;
        }
        header('Location: index.php');
      exit();
    }
}

header('agregaralcarrito.php');
exit();
