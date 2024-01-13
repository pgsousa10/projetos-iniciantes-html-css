<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Contato</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="my-5">Formulario de Contato</h1>
                    <form action="enviar.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="nome" placeholder="Digite seu nome..." class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="Digite seu e-mail..." class="form-control">
                        </div>
                        <div class="mb-3">
                            <textarea rows="3" name="mensagem" placeholder="Digite suma mensagem..." class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>