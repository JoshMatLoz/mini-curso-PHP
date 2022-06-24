<?php include 'includes/header.php';

# in array busca elemento en un arreglo

$carrito = ['Tabet', 'computadora', 'Monitor'];
  echo '<pre>';
  var_dump(in_array('Tabet', $carrito));#regresa true por que no si tiene tablet
  echo '</pre>';

#ordenar elementos de un arreglo
$numeros=[1,4,23,21,67,43];
  echo '<pre>';
  var_dump(sort($numeros)); # de menor a mayor
  echo '</pre>';

  echo '<pre>';
  var_dump(rsort($numeros)); # de mayor a menor
  echo '</pre>';

  # Ordenar arreglo asociativo

  $clientes = array(
    'nombre' => 'Vegetta ',
    'saldo' => 777,
    'tipo' => 'premium'
  );

  asort($cliente); #ordena por los valores alfabeticamente variante arsort()

  echo '<pre>';
  var_dump($cliente); # de menor a mayor
  echo '</pre>';

  ksort($cliente); #ordena por las llaves alfabeticamente cariante krsort()

  echo '<pre>';
  var_dump($cliente); # de menor a mayor
  echo '</pre>';
include 'includes/footer.php';