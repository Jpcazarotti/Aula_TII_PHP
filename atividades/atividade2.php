<?php
// 1ªAtividade 
// Declare variáveis para seu nome, idade e cidade natal, e exiba os valores usando echo.

$nome = "João Pedro";
$idade = 16;
$cidadeNatal = "Marília-SP";

echo "<h1>Atividade 1</h1>";
echo "Nome: $nome<br>Idade: $idade <br>Cidade Natal: $cidadeNatal";

echo "<hr>";

// 2ªAtividade
// Declare uma variável para a idade e use estruturas condicionais para verificar se a pessoa é menor de idade, adulta ou idosa, exibindo uma mensagem apropriada.

echo "<h1>Atividade 2</h1>";

$idade = 18;

if($idade < 18){
    echo "A pessoa é menor de idade!";
} else if($idade >= 18 && $idade < 60){
    echo "A pessoa é adulta";
} else{
    echo "A pessoa é idosa";
}

echo "<hr>";

// Atividade 3
// Use um laço for para exibir os números de 1 a 10.

echo "<h1>Atividade 3</h1>";

for($contador = 1; $contador <=10; $contador++){
    echo $contador . "<br>";
}

echo "<hr>";

// Atividade 4
// Use um laço while para exibir os números de 1 a 5 e um laço do...while para exibir os números de 6 a 10.

echo "<h1>Atividade 4</h1>";

echo "<h3>Laço utilizando 'while'</h3>";
echo "<br>";

$contador = 1;

while($contador <= 5){
    echo $contador . "<br>";
    $contador++;
}

echo "<br>";
echo "<h3>Laço utilizando 'do...while'</h3>";
echo "<br>";

$contador = 6;

do{
    echo $contador . "<br>";
    $contador++;
} while($contador <= 10);

// Atividade 5
// Crie um algoritmo que exiba a tabuada de um numero determinado, de 1 a 10, usando um laço for.

echo "<h1>Atividade 5</h1>";

for($contador = 1; $contador <= 10; $contador++){
    $resul = 2 * $contador;
    echo "2 x " . $contador . " = " . $resul . "<br>"; 
}

echo "<hr>";

// Atividade 6
// Crie uma função que receba um nome como parâmetro e retorne uma mensagem de saudação, e chame a função com diferentes nomes para exibir as mensagens.

echo "<h1>Atividade 6</h1>";

function saudacao($nome) {
    echo "Olá " . $nome . " seja bem-vindo!";    
}

saudacao("João Pedro");
echo "<br>";
saudacao("Vitória");
echo "<br>";
saudacao("Daiana");
echo "<br>";
saudacao("Jesus");
echo "<br>";
saudacao("Rodrigo");

echo "<hr>";

// Atividade 7
// Crie uma função que receba a largura e a altura de um retângulo como parâmetros e retorne a área, chamando a função com diferentes valores para exibir os resultados.

echo "<h1>Atividade 7</h1>";

function area($largura, $altura) {
    $resul = $largura * $altura;
    echo "Largura: " . $largura . "<br>" . "Altura: " . $altura . "<br>" . "A = " . $largura . " x " . $altura . " = " . $resul;    
}

area(10, 15);
echo "<br>";
echo "<br>";
area(6, 8);
echo "<br>";
echo "<br>";
area(147, 135);

echo "<hr>";

// Atividade 8
// Crie uma string com seu nome completo e use funções de manipulação de strings para exibir o nome em letras maiúsculas, minúsculas e apenas a primeira letra de cada palavra em maiúsculas.

echo "<h1>Atividade 8</h1>";

function maiscula($nome) {
    echo "Maiúsculo: " . strtoupper($nome);
}

maiscula("Joao P. C. Batista");
echo "<br>";

function minuscula($nome) {
    echo "Minúsculo: " . strtolower($nome);
}

minuscula("Joao P. C. Batista");
echo "<br>";

function plm($nome) {
    echo "Primeira letra maiúscula: " . ucwords(strtolower($nome));
}

plm("Joao P. C. Batista");

echo "<hr>";

// Atividade 9
// Declare variáveis para armazenar as notas de três disciplinas diferentes. Em seguida, crie uma função que calcule a média das três notas e exiba o resultado.

echo "<h1>Atividade 9</h1>";

function media($nota1, $nota2, $nota3) {
    $resul = ($nota1 + $nota2 + $nota3) / 3;
    echo "A média das notas é " . $resul;    
}

media(7, 6, 5);

echo "<hr>";

// Atividade 10
// Crie uma função que receba um número como parâmetro e retorne se o número é par ou ímpar. Chame a função com diferentes números e exiba os resultados.

echo "<h1>Atividade 10</h1>";

function p_i($num) {
    if($num % 2 == 0){
        echo "O número $num é par!<br>";
    } else{
        echo "O número $num é ímpar!<br>";
    }        
}

p_i(4);
p_i(9);
p_i(120);
p_i(5789);
?>