<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laços de repetição For e Foreach</title>
    </head>
    <body>
        
        <?php

            /* Estrutura do for
                for (inicialização, condição, iteração(incremento)) { 
                   faça..
                }
            */

            /*
            for ($i=1;  $i<=10;  $i++) {  Imprimi a partir de 1 até for menor que 10 
                print $i." ";
            }
            */

            for ($i=1;  $i<=10;  $i++) {
                print 'Arquivo '.$i.': <input type="file" name="'.$i.'"><br>';
            }

            /* Estrutura 1 do Foreach
            foreach ($variable as $value) {
                # code...
            }
            */

            /* Estrutura 1 do Foreach
            foreach ($variable as $key => $value) {
                # code...
            }
            */

            $frutas = array("Laranja", "Maça", "Pêra", "Limão", "Banana");

            foreach ($frutas as $fruta) {
                print $fruta." ";
            }

            print "<br>";

            foreach ($frutas as $key => $fruta) {
                print "Minha fruta de num. ".$key." é a ".$fruta."<br>";
            }

            $alfabeto = range("A", "Z"); //Range funciona com numeros ou com valores ao contrarios ou de determinados valores até outros valores escolhidos

            foreach ($alfabeto as $letra) {
                print $letra." ";
            }
        ?>
    </body>
</html>