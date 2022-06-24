<?php include 'includes/header.php';

$autenticado = true;

if($autenticado){
  echo 'Usuario autenticado';
}else{
  echo 'Usuario no autenticado';
}
echo '<br>';

$tecnologia = 'JS';

switch ($tecnologia){
  case 'PHP': 
    echo 'Un excelente lenguaje';
    break;
  
  case 'JS':
    echo 'El lenguje de la web';
    break;
  
  case 'HTML':
    echo 'Emmmm';
    break;

  default:
    echo 'No se de que lenguaje hablas';
    break;
}
include 'includes/footer.php';