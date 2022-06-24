<?php include 'includes/header.php';

$clientes = [
  'nombre' => 'Josue',
  'edad'=> 37,
  'informacion'=>[
    'tipo'=>'Premium'
  ]

];

echo '<pre>';
  var_dump($clientes);
  echo '</pre>';

  echo $clientes['nombre'];
  echo $clientes['saldo'];
  
?>
<br>
<?php

  #para acceder a un arreglo dentro de un arreglo

echo $clientes['informacion']['tipo'];

  echo '<pre>';
  var_dump($clientes);
  echo '</pre>';

$clientes['codigo'] = 0324345;
  
echo '<pre>';
var_dump($clientes);
echo '</pre>';

 
include 'includes/footer.php';