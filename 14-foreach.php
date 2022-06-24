<?php include 'includes/header.php';

$clientes = ['Juan', 'Pablo', 'Segindo'];

foreach($clientes as $cliente){
  echo $cliente.'<br>';
}

foreach($clientes as $cliente):
  echo $cliente.'<br>';
endforeach;

$clientes2 = [
  'nombre' => 'Josue',
  'saldo' => 200,
  'Tipo' => 'Premium'
];
#busca los valores del arreglo
foreach ($clientes2 as $value) {
  # code...
  echo '<br>'.$value;
}

#buscar ambos los dos


foreach ($clientes2 as $key =>$value) {
  # code...
  echo '<br>'.$key.' - '.$value;
}

include 'includes/footer.php';