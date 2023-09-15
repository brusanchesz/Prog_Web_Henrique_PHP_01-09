<?php
//VARIAVEIS

$a = 1;
$b = 'Texto';
$c = 2.05;
$nomeCliente = 'Joao'; 
$Nomecliente = "Antonio";

 // FORMAS DIFERENTES DE DECLARAR ESSAS VARIAVEIS
echo "a= $a b= $b <br>";  // VAI IDENTIFICAR E EXECUTAR
echo 'a = $a b = $b <br>';  // VAI IDENTIFICAR APENAS TEXTO 
echo 'a =' .$a. 'b =' .$b;  // VAI IDENTIFICAR VARIAVEIS E TEXTO E EXECUTAR OS DOIS CORRETAMENTE. E é a forma mais recente de se trabalhar.

echo "<br> $Nomecliente <br> $nomeCliente";

//KamelCase - o melhor método para nomear variaveis, da forma onde a primeira letra é maiuscula ou a primeira letra da segunda palavra maiscula

$x = 5;
$y = 4;
$j = $x + $y;

echo "<br>";

echo $x + $y;

echo "<br> J $j <br>";

$g = '5';
$h = '4';
$i =  $g + $h;

echo "<br> Valor de i $i <br>";

//AQUI ESTA SOMANDO, MAS NAS VERSÕES ANTIGAS ELE IRIA CONTATENAR ISSO, OU SEJA APENAS JUNTAR

?>
