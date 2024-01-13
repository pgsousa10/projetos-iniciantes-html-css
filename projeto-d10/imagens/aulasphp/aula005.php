<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estrutura de controle switch e case</title>
    <head>
    <body>
    
        <form action="aula005.php" method="GET">
            <label>Digite uma letra</label>
            <input type="text" name="letra">
            <button type="submit">Enviar</button>
        </form>

        <?php
        
        /* Estrutura
        switch( variavel ){
            case 'value':
                codigo...
                break;
            
            case 'value':
                codigo...
                break;

            default:
                codigo...
        }
        */

        /* Exemplo dias da semana como são apenas 7 casos não é necessario o default
        switch(date("N")){
            case 1:
                print "Segunda feira";
                break;
            
            case 2:
                print "Terça feira";
                break;

            case 3:
                print "Quarta feira";
                break;

            case 4:
                print "Quinta feira";
                break;    

            case 5:
                print "Sexta feira";
                break;
                    
            case 6:
                print "Sabado";
                break;

            case 7:
                print "Domingo";
                break;
        }
        */

        switch (strtoupper(@$_REQUEST['letra'])) {
            case 'A':
            case 'E':
            case 'I':
            case 'O':        
            case 'U':
                print "É uma vogal";
                break;    

            default:
            print "É uma consoante";
        }
        ?> 
    </body>
</html>