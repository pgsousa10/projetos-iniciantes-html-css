<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela Dinamica com laço FOR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="my-5"><h1>Tabela</h1></div>
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label>N. de linhas</label>
                            <input type="number" name="linha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>N. de colunas</label>
                            <input type="number" name="coluna" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Texto</label>
                            <input type="text" name="texto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>    
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php
                        $row = @$_POST['linha'];    
                        $col = @$_POST['coluna'];
                        $txt = @$_POST['text'];

                        print "<table class='table table-bordered table-striped table-hover'>";

                        for ($i = 1; $i <= $row; $i++){ 
                            print "<tr>";
                                for($j = 1; $j <= $col; $j++){
                                    print "<td>";
                                    print $txt;
                                    print "</td>";
                                }
                            print "</tr>";
                        }

                        print "</table>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>