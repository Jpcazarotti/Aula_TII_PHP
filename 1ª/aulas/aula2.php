<?php 
  $nome = "João Pedro Cazarotti";
  $dataNascimento = "15/07/2008";
  $cpf = "111.222.333-44";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Aula de PHP 2</title>
        <style>
            #btns {
                display: flex;
                margin: 15px 25px;
            }

            #btnAlerta {                               
                box-shadow: 1px 1px 5px rgb(0, 0, 0, 0.7);
                color: black;
                background-color: #ADD8E6;
                border: none;
                border-radius: 15px;
                width: 150px;
                height: 25px;                
            }

            #btnAlerta:hover {
                background-color: #87CEEB;
            }
        </style>
    </head>
    <body>
        <div id="btns">
            <button id="btnAlerta">Mostrar Alerta</button> 
        </div>
        <script>
            const btnAlerta = document.getElementById('btnAlerta');
            btnAlerta.addEventListener('click', function(){
                alert("Este é um exemplo de JavaScript!");
            });
        </script>
        <hr>
        <h1>Ficha do Aluno</h1>
        <p>
            <strong>Nome:</strong> <?=$nome?> <br>
            <strong>Data de Nascimento:</strong> <?=$dataNascimento?> <br>
            <strong>CPF:</strong> <?=$cpf?> <br>
        </p>
    </body>
</html>