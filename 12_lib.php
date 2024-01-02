<?php 
  include_once './includes/header.php'; 
?>

<?php 

  $frutas = ["Manzana", "Uva", "Pera"];

  echo count($frutas);

  $nombre= 'Aldahir';

  echo strtoupper($nombre);

  echo strtolower($nombre);

  $password = '  asdasdasd asda assas';

  var_dump (trim ($password));

  echo strlen($password);
?>