<?php include 'includes/header.php';

$carrito = ['Tablet', 'Audifonos', 'Monitor wide'];

$carrito2 = array();
//Util para ver los contenidos de un array
echo '<pre>';
  var_dump($carrito);
  echo '</pre>';

echo '<pre>';
  var_dump($carrito[1]);
  echo '</pre>';
# Añade elemento
  $carrito[3]= 'Teclado gaymer';

# añadir elemento nuevo al final

array_push($carrito, 'Mouse RGB');

# Añadir al inicio

array_unshift($carrito, 'Silla Chida');

#

$clientes = array('Cliente 1','Cliente 2','Cliente 3','Cliente 4','Cliente 5');

echo '<pre>';
  var_dump($clientes);
  echo '</pre>';

  
include 'includes/footer.php';