<?php 
  include_once './includes/header.php'; 
?>

<?php
  $frutas = array('Manzana', 'Uva', 'Pera');

  $alumno = [
    'Nombre' => 'Aldahir',
    'Apellido' => 'Mayorga',
    'Edad' => 30,
    'Inscrito' => true
  ];

  echo "<pre>" ;
    var_dump($alumno);
    var_dump($frutas);
  echo "</pre>";
?>