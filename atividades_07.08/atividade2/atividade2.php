<?php
$img1 = '<img src="/1ª/atividades_07.08/atividade2/img/download 1.png" alt="Imagem Criança/Adoslecente">';
$img2 = '<img src="/1ª/atividades_07.08/atividade2/img/adulto.png" alt="Imagem Adulto">';
$img3 = '<img src="/1ª/atividades_07.08/atividade2/img/idoso.png" alt="Imagem Idoso">';

$idade = $_GET['idade'];

if ($idade < 18) {
    echo "Você tem $idade, portanto és menor de idade! <br> $img1";
} else if ($idade >= 18 && $idade < 65) {
    echo "Você tem $idade, portanto és um adulto! <br> $img2";
} else {
    echo "Você tem $idade, portanto és um idoso! <br> $img3";
}
