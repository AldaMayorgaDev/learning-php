<?php 
  include_once './includes/header.php'; 
?>

<?php 
  $frutas = array("Manzana", "Pera", "Limon");
  $amigos = ['Carmen', 'Alely', 'Jose', 'Hugo'];

  array_push($frutas,"uvas"); //Agrega al final
  unset ($frutas[2]); //elimina posion 2
  echo '<pre>';
  var_dump($frutas);
  var_dump($amigos);
  echo "</pre>";

  echo $frutas[0];
?>
