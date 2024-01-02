<?php 
  include_once './includes/header.php'; 
?>




<!-- HTML en PHP -->

<?php 

  $alumno = [
    "nombre" => 'Aldahir',
    "carrera" => 'Ing. Sistemas',
    "matricula" => 12200639,
    "beca" => true
  ];

 // HTML en PHP
  echo "<h1> Hola Alumno: " . $alumno["nombre"] . " Carrera: " . $alumno["carrera"] . "</h1>"
?>


<!-- PHP en HTML -->

<h1> Hola ALumno: <?php echo $alumno["nombre"] . " Carrera: " . $alumno["carrera"] ?></h1>