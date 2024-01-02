<?php 
  include_once './includes/header.php'; 
?>

<?php

  $frutas = array("Manzana", "Pera", "Uva", "Guayaba", "Platano");
  $i = 0;
  while($i < count($frutas)){
    //echo "i: " . $i . "<br />";
    echo $frutas[$i] . "<br/>";
    $i++;
  };
?>