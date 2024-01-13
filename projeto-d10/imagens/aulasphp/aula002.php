<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sintaxe do PHP</title>
    </head>
    <body>
        <?php
            echo "Hello World";//Echo para escrever  
            print "Conteudo aqui";  //Print, para imprimir conteudo na tela

            //Variaveis
            $cor = "verde"; //Criando uma variavel que seria a cor
            echo "Uma cor: ".$cor; // Pedindo para ser escrita

            /* Tipos de variaveis
            String
            Integer
            Float
            Bollean     
            Array
            Object
            NULL
            Resource
            */
            
            $nome = "Pedro Gonçalves"; //Criando uma variavel do tipo string
            var_dump($nome); // Descobrir de que tipo é uma variavel 
        ?>
    </body>
</html>