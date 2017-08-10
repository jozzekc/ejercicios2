<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>

<h4>Suma de Los Numeros pares Del 1 Al 100</h4>
    <?php
$numer=1;
$acum=0;


while ($numer<=100){
if (($numer%2)==0){
echo "-:";
  $acum=$acum+$numer;
}
  $numer++;

}
echo $acum;
  ?>
  <h2>Cargando Suma:<?php echo$acum ?></h2>
  </body>
</html>
