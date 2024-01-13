<h1>Editar Carro</h1>
<?php
    $sql = "SELECT * FROM carros WHERE id=".$_REQUEST["id"];
    
    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Marca</label>
        <input type="text" name="marca"  value="<?php print $row->marca; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" value="<?php print $row->cor; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data do Carro</label>
        <input type="date" name="data_car"  value="<?php print $row->data_car; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>