<?php 
  include_once './includes/header.php'; 
?>

<?php 
  // If

  $dinero = 249;

  if($dinero == 199){
    echo "tienes al menos 199";
  }else if($dinero > 199 && $dinero  < 250){
    echo "tienes mas que 199 y menos de 250";
  }else {
    echo "no tienes suficiente saldo";
  };
?>