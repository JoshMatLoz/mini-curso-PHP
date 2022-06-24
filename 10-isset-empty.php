<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Juan', 'Pablo', 'Segundo');
$cliente = [
  'nombre'=> 'Josue', 'saldo' => 200
];

# Empty

  echo '<pre>';
  var_dump(empty($clientes));#regresa true por que no tiene nada
  echo '</pre>';

  echo '<pre>';
  var_dump(empty($clientes2));#regresa false por que no si tiene algo
  echo '</pre>';

  #Isset Revisa si el arreglo esta creado o un apropiedad esta definida
echo '<br>';
  var_dump(isset($clientes4)); //Devuelve false por que no esta definida


  echo '<pre>';
  var_dump(isset($cliente['nombre']));#regresa true por que si existe el nombre
  echo '</pre>';

  echo '<pre>';
  var_dump(isset($cliente['codigo']));#regresa false por que la propiedad no existe
  echo '</pre>';
include 'includes/footer.php';