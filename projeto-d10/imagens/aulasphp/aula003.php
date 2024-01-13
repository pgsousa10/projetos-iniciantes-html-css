<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções de manipulação de string</title>
    </head>
    <body>
        <?php
            $nome = "Pedro Goncalves";
            $nome_maisculo = strtoupper($nome); // Função para tranformar a variavel em maiusculo, strtolower para minusculo
            echo $nome_maisculo;
            
            $nome = "Pedro Goncalves";
            $parte = substr($nome, 5); // Função para te retorna apenas a quantidade pedida da variavel
            echo $parte;

            $nome = "Pedro Goncalves";
            $parte = str_repeat($nome, 5); // Função para repetir sua variavel a qauntidade de vezes pedida
            echo $parte;

            $nome = "Pedro Goncalves";
            $parte = strlen($nome); // Função para te dizer quantos caracters tem sua variavel
            echo $parte;

            $nome = "Pedro Goncalves";
            $parte = str_word_count($nome); // Função para contar a qauntidade de palavras da sua variavel
            echo $parte;

            $nome = "Pedro Goncalves";
            $novo_nome = str_replace("Goncalves", "Sousa", $nome); // Função que troca sua variavel pelo que você pede 
            echo $novo_nome;

            $nome = "Pedro Goncalves";
            $parte = strrev($nome); // Função para inverter a ordem da sua variavel
            echo $parte;
            
            $nome = "Pedro Goncalves";
            $parte = str_shuffle($nome); // Função para embaralhar sua variavel
            echo $parte;
        ?>
    </body>
</html>