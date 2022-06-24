<?php include 'includes/header.php';

declare(strict_types=1);

function autenticado(bool $auth): string{ # los dos puntos significan que retorna un string, se puede poner void en caso de que no quieras retornar nada solo imprimir
  return 'El usuario autenticado';
}

$usuario = autenticado(true);
echo $usuario;

function autenticado2(bool $auth): string|int{  #puede retornar string o int
  if($auth){
    return 'CHIDO';
  }else{
    return 34;
  }
  return 'El usuario autenticado';
}

$usuario = autenticado2(true);
echo $usuario;

include 'includes/footer.php';