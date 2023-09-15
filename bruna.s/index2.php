<?php
//TIPO BOOLEADO
$exibir_nome = true;

if ($exibir_nome){// se for verdadeiro
    echo 'Variavel TRUE';
} if (!$exibir_nome){ // se for falso
    echo 'Varivel FALSE';
}


$umidade = 90;
$chover = ($umidade >= 90);


if ($chover){
    echo "<br>vai chover";
} else {
    echo "não vai chover";
}
?>


<?php
//VETOR 
$vetor = array('abobora', 'melao', 'goiaba');  //ordem 

var_dumb ($vetor); // fazendo isso imprime todo o Array
echo "<hr>"; // para deixar um do lado do outro 
print_r ($vetor);
echo "<hr>";

echo "$vetor[0] <br>";
echo "$vetor[1] <br>";
echo "$vetor[3] <br> <hr>";


foreach ($vetor as $fruta) {
    echo "$fruta <br>";
}

for ($k=0; $k <count($vetor); $k++){
    echo "Fruta $k é: $vetor [$k] <br/>";
}

?>