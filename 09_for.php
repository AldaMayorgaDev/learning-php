<?php 
  include_once './includes/header.php'; 
?>

<?php 

/**
 * for (valor inicial; Condicion; Incremento){
 *    lo que se va a ejecutar
 * }
 */
  for ($i = 0; $i<= 10; $i++){
    echo "El valor de i es: " . $i;
    echo "<br />";
  }

  echo "<br />";

  for ($j=1; $j <=100; $j++){

    if($j % 5 ===0){
      echo $j . " Es Multiplo de 5" . "<br/>";
      continue;
    }
    echo "Numero: " . $j . "<br />";
  }
?>