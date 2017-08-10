<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>

<h4>Suma de  Todos Los Numeros Del 1 Al 100</h4>
    <?php
$numer=1;
$acum=0;


while ($numer<=100){

$acum=$acum+$numer;
echo "-:";


  $numer++;

}
echo $acum;
  ?>
  <h2>Cargando Suma:<?php echo$acum ?></h2>
  </body>
</html>
