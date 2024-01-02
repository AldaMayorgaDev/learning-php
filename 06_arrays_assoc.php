<?php 
  include_once './includes/header.php'; 
?>

<?php
  $estudiante = [
    'nombre' => 'Juan',
    "apellido" => 'Acellido',
    'pais' => 'Mexico'
  ];

  echo $estudiante['nombre'];

  echo $estudiante['nombre'] ." ". $estudiante['apellido'];



  echo "<pre>";
    var_dump($estudiante);
  echo "</pre>";
?>