<?php
$name = $_POST['name'];
$sf = $_POST['sf'];
$tv = $_POST['tv'];

$tvFinal = $tv * 0.15;

echo "<h2>Dados</h2>";
echo "<hr>";
echo "<strong>Nome:</strong> $name";
echo "<br>";
echo "<strong>Salário Fixo:</strong> $sf";
echo "<br>";
echo "<strong>Salário no Final do mês:</strong> $tvFinal";

?>