<?php 
  include_once './includes/header.php'; 
?>

<?php 
  $frutas = ['Manzana', 'Uva', 'Guayaba', 'Pera', 'Platano'];


  foreach($frutas as $fruta){
    echo $fruta . "<br/>";
  }
?>