<?php
$altura = $_GET['altura'];
$kg = $_GET['kg'];

$imc = $kg / ($altura ** 2);

echo "<h2>Retorno</h2>";
echo "<hr>";
echo "<br>";

if($imc < 18.5){
    echo "Você está abaixo do peso!";
} else if($imc >= 18.5 && $imc < 25){
    echo "Parabéns!! Você está no peso ideal.";
} else if($imc >= 25 && $imc < 30){
    echo "Você está com sobrepeso!";
} else if($imc >= 30 && $imc < 35) {
    echo "Você está com obesidade grau 1!";
} else if($imc >= 35 && $imc < 40){
    echo "Você está com obesidade grau 2!";
} else {
    echo "Você está com obesidade grau 3(mórbida)!";
}
?>