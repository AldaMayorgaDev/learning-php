<?php 
  include_once './includes/header.php'; 
?>

<?php

  function calcular_total($cantidad){
    $total = $cantidad * 1.16;

    return $total;
  };

  $cantidad_pagar = calcular_total(1000);


  echo $cantidad_pagar;

  function pagar ($total) {
    $balance = 5000;

    if ($total > $balance){
      echo 'Error de fondos';
    } else{
      echo 'Pago exitoso';
    }
  }

  pagar($cantidad_pagar);
?>