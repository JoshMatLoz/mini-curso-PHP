<?php include 'includes/header.php';

$nom = "Josué                     E  M  mmanuel";
//conocer extension de un string
echo strlen($nom);
var_dump($nom);

//eliminar espacion en blanco
trim($nom);

strtoupper($nom);
strtolower($nom);

$mail1 = 'correo@correo.com';
$mail2 = 'Correo@Correo.com';
var_dump(strtolower($mail1) == strtolower($mail2));
include 'includes/footer.php';

//reemplazar letras

str_replace('Josue', 'J', $nom);

//revisar si un string existe

strpos($nom, 'Josue');

$tipoCliente = 'premium';

echo 'El cliente '. $nom . ' es ' . $tipoCliente;
 echo "El cliente {$nom} es {$tipoCliente}";//Solo comillas dobles