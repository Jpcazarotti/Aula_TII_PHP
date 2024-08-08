<?php
$nome = "João Pedro";
$idade = 16;
$altura = 1.84;
$aceitoTermo = true;
$aceitoTermo2 = 1;

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";

echo "<hr>";

// Estrutura Condiconal

$idade = 18;

if($idade >= 16){
    echo "Pode Votar!";
} else{
    echo "Não Pode Votar!";
}

echo "<hr>";

// Verificar se é menor de idade, adulto ou idoso

$idade = 20;

if($idade < 18){
    echo "Você é menor de idade";
} else if($idade >= 18 && $idade < 60){
    echo "Você é um adulto";
} else{
    echo "Você é um idoso";
}

echo "<hr>";

// Qual a cor preferida. Vermelho, azul ou verde

$cor = "vermelho";

switch($cor){
    case "vermelho":
        echo "Minha cor favorita é vermelho!";
        break;
    case "azul":
        echo "Minha cor favorita é azul!";
        break;
    case "verde";
        echo "Minha cor favorita é verde!";
        break;
    default:
        echo "Nenhuma cor foi selecionada!";
}

echo "<hr>";

// Imprima na tela os números de 1 a 5

$contador = 1;

while($contador <= 5){
    echo $contador . "<br>";
    $contador++;
}

echo "<hr>";

for($contador = 1; $contador <= 5; $contador++){
    echo $contador . "<br>";
}

echo "<hr>";

function saudacao($nome) {
    echo "Olá ".$nome." seja bem-vindo!";   
}

saudacao("João Pedro");
?>