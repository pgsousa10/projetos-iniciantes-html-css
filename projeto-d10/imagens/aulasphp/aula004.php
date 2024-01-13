<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estrutura de controle if e else</title>
    </head>
    <body>
        
        <form action="aula004.php" method="GET">
            <label>A</label>
            <input type="number" name="a">
            <label>B</label>
            <input type="number" name="b">
            <button type="submit">Enviar</button>
        </form>
        
        <?php
            
            /* Estrutura  
            if( expressão ){
                comando
            }else{
                comando
            }
            */
            
            /* Como funciona
            $a = 10;
            $b = 20;

            if( $a > $b){
                print $a." é maior que o valor de ".$b;
            }else{
                print $b." é maior que o valor de ".$a;
            }
            */

            $a = @$_GET['a']; //Criando um formulario e usando o metodo GET para ser passado um valor pelo usuario 
            $b = @$_GET['b'];

            if( $a > $b){
                print $a." é maior que o valor de ".$b;
            }elseif( $b > $a){
                print $b." é maior que o valor de ".$a;
            }else{
                print $a." é igual à ".$b;
            }
            
        ?>
    </body>
</html>