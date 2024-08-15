<?php

echo "<h1>Trabalhando com Array em PHP!</h1>";

echo "<h4>Array Unidimensional!</h4>";

$frutas = ['Banana', 'Maça', 'Uva', 'Laranja', 'Tomate'];

echo $frutas;

echo "<hr>";

var_dump($frutas);

echo "<hr>";

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<hr>";

echo $frutas[2];

echo "<hr>";

echo "<h4>Array Associativo!</h4>";

$mercadoria = [
    258 => "Arroz",
    369 => "Feijão",
    147 => "Cenoura"
];

$estados = [
    "SP" => "São Paulo",
    "RJ" => "Rio de Janeiro"
];

echo "<hr>";

echo $mercadoria[369];
echo "<br>";
echo $estados["RJ"];

echo "<hr>";

echo "<h4>Array Multidimensional!</h4>";

$feira = [
    "frutas" => [
        11 => "Banana",
        25 => "Maça",
        36 => "Uva",
        "MO" => "Morango",
        2 => "Pera",
        "Manga"
    ],
    "verduras" => [
        "Alface",
        "Repolho",
        "Cenoura"
    ]
];

var_dump($feira);

echo $feira["frutas"][36];
echo "<br>";
echo $feira["frutas"][37];
echo "<br>";
echo $feira["verduras"][1];
?>