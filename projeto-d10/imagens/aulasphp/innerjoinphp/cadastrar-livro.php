<h1>Cadastrar Livro</h1>
    <form action="?page=salvar-livro" method="POST">
        <div class="mb-3">
            <label>Categoria</label>
            <select name="categoria_cod_categoria" class="form-control">
                <option>-=Escolha a Categoria=-</option>
                <?php
                    $sql = "SELECT * FROM categoria";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_object()) {
                        print "<option value='".$row->cod_categoria."'>";
                        print $row->nome_categoria."<option/>";
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Titulo</label>
            <input type="text" nome="titulo_livro" class="form-control">
        </div>
        <div class="mb-3">
            <label>Autor</label>
            <input type="text" nome="autor_livro" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </form>