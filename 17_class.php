<?php 
  include_once './includes/header.php'; 
?>

<?php
  class Cliente {

    //constructor
    public function __construct($nombre){
     $this-> nombre = $nombre;
    }

    //metodo
    public function mostrar_nombre(){
      echo "El nombre es " . $this->nombre . "<br/>";
    }

  }

  $cliente = new Cliente('Aldahir');
  $cliente->mostrar_nombre();

  $cliente2 = new Cliente('Michelle');
  $cliente2->mostrar_nombre();

?>