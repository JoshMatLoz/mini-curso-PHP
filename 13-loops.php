<?php include 'includes/header.php';

# while
$i=0;
while($i < 10){
  echo "{$i} <br>";
  $i++;
}

#do while

$i = 0;

do{
  echo "{$i} <br>";
  $i++;
}while($i<10);

#for

/*
  Ejercicio
  si el numero se puede dividir entre 3 imprimir Fizz
  si se puede dividir entre 5 Buzz
  multiplo de 3 y 5 FIZZ BUZZ
*/

for($i=1; $i <= 30; $i = $i + 1){
  if($i % 15 == 0){
    echo $i.'--FIZZ BUZZ';
  }
  else if($i % 3 == 0){
    echo $i . '--Fizz <br>';
  }elseif ($i % 5 == 0) {
        echo $i . '--Buzz <br>';
  }else{
    echo $i.' <br>';
  }
}

for($i=1; $i <= 30; $i = $i + 1):
  if($i % 15 == 0):
    echo $i.'--FIZZ BUZZ';

  elseif($i % 3 == 0):
    echo $i . '--Fizz <br>';

  elseif ($i % 5 == 0) :
        echo $i . '--Buzz <br>';
  
  else:
    echo $i.' <br>';
    
  endif;
endfor;

include 'includes/footer.php';