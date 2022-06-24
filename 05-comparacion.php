<?php include 'includes/header.php';


$n1 = 20;
$n2 = 30;
$n3 = 30;
$n4 = "30";

var_dump($n1 > $n2);
echo '<br>';
var_dump($n1 < $n2);
echo '<br>';
var_dump($n1 <= $n2);
echo '<br>';
var_dump($n1 >= $n2);
echo '<br>';
var_dump($n1 == $n2);
echo '<br>';
var_dump($n2 == $n4);
echo '<br>';
var_dump($n1 === $n4);
echo '<br>';
//Este operador dice que si el numero de la izquiera es menor al de la derecha, imprime -1, si es igual imprime 0 y si es mayor imprime 1
var_dump($n1 <=> $n2);
include 'includes/footer.php';