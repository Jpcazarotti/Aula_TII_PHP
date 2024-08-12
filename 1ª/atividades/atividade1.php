<?php
 $nome1 = "Joao P. C. Batista";
 $cpf1 = "111.222.333-44";
 $rg1 = "6245938-J";
 $endereco = "Rua Fernando Sérgio Mazzini, 11 - Bairro Villa D'Italia - Marília-SP";

 $nome2 = "Vitoria B. Paes";
 $cpf2 = "555.666.777-88";
 $rg2 = "3476436-V";
 $requerimento = "5227540";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>1ª Atividade de PHP</title>
</head>
<body>
    <h1>1ª Atividade de PHP</h1>
    <p>
        Eu, <strong><?=strtoupper($nome1)?></strong>, inscrito no CPF sob o nº<strong><?=$cpf1?></strong> e no RG nº<strong><?=$rg1?></strong>, residente e domiciliado à <strong><?=$endereco?></strong>, autorizo a Sra. <strong><?=strtoupper($nome2)?></strong> incrita no CPF nº<strong><?=$cpf2?></strong> e no RG nº<strong><?=$rg2?></strong>, a retirar em meu nome os documentos previamente solicitados por meio do requerimento nº<strong><?=$requerimento?></strong>. 
    </p>
    
    <hr>

    <h1>Funções:</h1>

    <h4>1ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> strlen();</li>
        <li><strong>Descrição:</strong> Retorna o comprimento de uma string;</li>
        <li><strong>Sintaxe:</strong> `strlen(string $string): int`</li>
        <li><strong>Exemplo de Uso:</strong><br> $texto = "Olá Mundo";<br> $comprimento = strlen($texto);<br> echo $comprimento; // Saída: 9</li>
    </ul>

    <h4>2ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> trim();</li>
        <li><strong>Descrição:</strong> Remove espaços em branco (ou outros caracteres) do início e do fim de uma string;</li>
        <li><strong>Sintaxe:</strong> `trim(string $string, string $characters = " \t\n\r\0\x0B"): string`</li>
        <li><strong>Exemplo de Uso:</strong><br> $texto = "   Olá Mundo   ";<br> $textoLimpo = trim($texto);<br> echo $textoLimpo; // Saída: "Olá Mundo"</li>
    </ul>

    <h4>3ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> explode();</li>
        <li><strong>Descrição:</strong> Divide uma string em um array com base em um delimitador;</li>
        <li><strong>Sintaxe:</strong> `explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array`</li>
        <li><strong>Exemplo de Uso:</strong><br> $frase = "Olá, Mundo, PHP";<br> $array = explode(", ", $frase);<br> print_r($array);<br> // Saída: Array ( [0] => Olá [1] => Mundo [2] => PHP )</li>
    </ul>

    <h4>4ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> implode();</li>
        <li><strong>Descrição:</strong> Junta os elementos de um array em uma string;</li>
        <li><strong>Sintaxe:</strong> `implode(string $glue, array $pieces): string`</li>
        <li><strong>Exemplo de Uso:</strong><br> $array = ["Olá", "Mundo", "PHP"];<br> $string = implode(" ", $array);<br> echo $string; // Saída: "Olá Mundo PHP"</li>
    </ul>

    <h4>5ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> number_format();</li>
        <li><strong>Descrição:</strong> Formata um número com os agrupamentos de milhar e casas decimais;</li>
        <li><strong>Sintaxe:</strong> `number_format(float $number, int $decimals = 0, string $decimal_separator = ".", string $thousands_separator = ","): string`</li>
        <li><strong>Exemplo de Uso:</strong><br> $numero = 1234.5678;<br> $formatado = number_format($numero, 2, ',', '.');<br> echo $formatado; // Saída: "1.234,57"</li>
    </ul>

    <h4>6ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> str_replace();</li>
        <li><strong>Descrição:</strong> Substitui todas as ocorrências da string de procura com a string de substituição;</li>
        <li><strong>Sintaxe:</strong> `str_replace(mixed $search, mixed $replace, mixed $subject, int &$count = null): mixed`</li>
        <li><strong>Exemplo de Uso:</strong><br> $texto = "Olá Mundo";<br> $novoTexto = str_replace("Mundo", "PHP", $texto);<br> echo $novoTexto; // Saída: "Olá PHP"</li>
    </ul>

    <h4>7ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> substr();</li>
        <li><strong>Descrição:</strong> Retorna uma parte de uma string;</li>
        <li><strong>Sintaxe:</strong> `substr(string $string, int $start, int $length = null): string`</li>
        <li><strong>Exemplo de Uso:</strong><br> $texto = "Olá Mundo";<br> $parte = substr($texto, 4, 5);<br> echo $parte; // Saída: "Mundo"</li>
    </ul>

    <h4>8ªFunção:</h4>
    <ul>
        <li><strong>Nome da Função:</strong> date();</li>
        <li><strong>Descrição:</strong> Formata uma data/hora local;</li>
        <li><strong>Sintaxe:</strong> `date(string $format, int $timestamp = time()): string`</li>
        <li><strong>Exemplo de Uso:</strong><br> $data = date("d/m/Y");<br> echo $data; // Saída: Data atual no formato "dia/mês/ano"</li>
    </ul>
</body>
</html>