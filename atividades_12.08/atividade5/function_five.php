<?php
$idade = $_GET['idade'];

echo "<h2>Retorno</h2>";
echo "<hr>";
echo "<br>";

if($idade > 0) {
    if($idade < 18) {
        echo "Está pessoa é menor de idade!";
    } else {
        echo "Está pessoa é maior de idade!";
    }
} else {
    echo "Por Favor, insira um valor que seja maior que zero!";
}
?>