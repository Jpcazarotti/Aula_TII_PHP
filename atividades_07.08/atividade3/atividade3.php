<?php
$tabuada = $_GET['tabuada'];

for($i = 0; $i <= 10; $i++){
    $resul = ($tabuada * $i);
    echo "$tabuada x $i = $resul <br>";
}