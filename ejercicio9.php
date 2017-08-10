<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Ejercicio 9 </title>
  </head>
  <body>

        <?php
          $i=1;
          $suma=0;
          $cont=0;

            while ($i<=100){
               if (($i%2)==0){
               $suma=$suma+$i;
               $cont++;
       }
          $i++;
       }
echo "Suma De Numeros Pares:";
           echo  $suma;

           echo "<br>";
           echo " <h2> Cantidad De Numeros Pares: $cont</h2>";

         ?>
  </body>
</html>
