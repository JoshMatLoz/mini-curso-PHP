<?php include 'includes/header.php';

$productos = [
  [
  'nombre' => 'Tablet',
  'precio' => 200,
  'disponible' => true
  ],
  [
  'nombre' => 'Mouse Gáymer',
  'precio' => 2020,
  'disponible' => true
  ],
  [
  'nombre' => 'KG de Frijoles',
  'precio' => 2009996,
  'disponible' => false
]

];

echo '<pre>';
  var_dump($productos);
  $json = json_encode($productos, JSON_UNESCAPED_UNICODE); #Codifica un arreglo a un string
  var_dump($productos);

  $jsonArray = json_encode($json);
  var_dump($jsonArray);

  echo '</pre>';

include 'includes/footer.php';