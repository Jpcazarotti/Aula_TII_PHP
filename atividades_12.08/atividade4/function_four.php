<?php
$num = $_GET['num'];

echo "<h2>Retorno</h2>";
echo "<hr>";
echo "<br>";

// if(is_int($num)) {
//     if($num % 2 === 0){
//         echo "O número $num é par!";
//     } else {
//         echo "O número $num é ímpar!";
//     }
// } else {
//     echo "O número inserido não é válido, pois não é um número inteiro. Por Favor, insira um número que seja válido!";
// }

if($num % 2 === 0){
    echo "O número $num é par!";
} else {
    echo "O número $num é ímpar!";
}
?>