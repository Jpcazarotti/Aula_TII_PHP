<?php
$cf = $_GET['cf'];
$i = $_GET['i'];
$pd = $_GET['pd'];

$ci = $cf + ($cf * ($i / 100));
$cc = $ci + ($ci * ($pd / 100));

echo "<h2>Retorno</h2>";
echo "<hr>";
echo "<br>";
echo "O custo para o consumidor será de R$$cc";