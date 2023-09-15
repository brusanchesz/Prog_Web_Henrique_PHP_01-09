<?php
//CONSTANTES

DEFINE ('NOME', 'Marcos');
DEFINE ('IDADE', 35);

echo 'Constante ' .NOME. ' Idade:' .IDADE;

echo "<br>URI Solicitada $_SERVER[REQUEST_URI]<br>";
echo "IP Remoto $_SERVER[SERVER_ADDR] <br>";

//IMPORTANCIA DO ++ E DO --

$x = 10;
echo ++$x; echo "$x <br>";  //INCREMENTO

$x = 10;
echo $x++; echo "$x <br>";

$x = 10;
echo --$x; echo "$x <br>"; //DECREMENTO

$x = 10;
echo $x--; echo "$x <br>";

?>