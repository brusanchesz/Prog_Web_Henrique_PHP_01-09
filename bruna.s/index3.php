<?php
function pinga ($dinheiro, $idade){
    if ($idade >= 18){

    if ($dinheiro >= 10){
        echo "Bora beber um litrao";
    }else {
        echo "maior, mas quebrado";
    }
}else {
    echo "menor de idade, nao pode beber";
}
}

pinga (10, 20); 
echo "<hr>";
?>



<?php
function pinga2 ($dinheiro, $idade){
    if ($idade >= 18){
    if ($dinheiro >= 10){
        $resposta = "Bora beber um litrao";
    }else {
        $resposta = "maior, mas quebrado";
    }
}else {
    $resposta = "menor de idade, nao pode beber";
}
return $resposta;
}

pinga2 (10,20); //NAO FUNCIONA PARA FUNCAO
echo "<hr>";
$oi = pinga2 (100,15);
echo "$oi";

// DOIS TIPOS DE FUNÇÕES, NA SEGUNDA ELA ATRIBUI O RESULTADO DA FUNÇÃO PARA UMA VARIAVEL
?>

