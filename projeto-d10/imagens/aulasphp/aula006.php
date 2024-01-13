<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laços de repetição While e Do While</title>
    </head>
    <body>
        
        <form action="aula006.php" method="GET">
            <label for="">Inicio</label>
            <input type="number" name="inicio">
            <label for="">Fim</label>
            <input type="number" name="fim">
            <button type="submit">Enviar</button>
        </form>
        
        <?php
        
            /* Estrutura while
                while( condição ){
                    codigo
            } 
            */
        
            /*
            $i = 1;  Ira adicionar +1 até o 10 como manda o while
           
            while ($i <= 10){
                print $i." ";
                $i++;
            }
            */

            /* Estrutura do while
                do{
                    comandos
                }while( condição )
            */

            /*
            $i = 1; Imprimi apenas se for verdadeiro caso seja falso imprimi ainda assim so o seu print

            do{
                print $i." ";
                $i++;      
            }while($i > 11)
            */

            /*
            $i = 0; Imprimi enquanto for até o 5 que pede para parar, sendo verdadeiro que i é = a 5 
            
            while (true) {
                if($i == 5){
                    break;
                }
                print $i;
                $i++;
            }
            */

            /*
            $i = 0; Imprimi enquanto o i for menor que 10 com uma validação apenas para os numeros impares

            while ($i < 10) {
                $i++;
                if ($i % 2 == 0) {
                    continue
                }
                print $i;
            }
            */

            $inicio = @$_REQUEST["inicio"];
            $fim = @$_REQUEST["fim"];

            while ($inicio <= $fim) {
                print $inicio." ";
                $inicio++;
            }
        ?>
    </body>
</html>