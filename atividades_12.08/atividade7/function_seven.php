<?php
$pc = $_GET['pc'];
$pa = $_GET['pa'];

$pv = $pc * (1 + $pa / 100);


echo "<h2>Retorno</h2>";
echo "<hr>";
echo "<br>";
echo "O valor de venda deste produto é $pv";