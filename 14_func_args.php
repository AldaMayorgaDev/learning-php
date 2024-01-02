<?php 
  include_once './includes/header.php'; 
?>

<?php 
  function saludar($nombre) {
    echo "Hola {$nombre} <br/>";
  }

  saludar("Miguel");


  function sumar($num1=0, $num2=0) {
    echo "la suma dse {$num1} + {$num2} es igual a: " . $num1+$num2 . "<br/>";
  }

  sumar(1,2);
  sumar(9);
?>