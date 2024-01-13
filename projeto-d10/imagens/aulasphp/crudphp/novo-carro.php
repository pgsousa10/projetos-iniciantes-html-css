<h1>Novo Carro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data do Carro</label>
        <input type="date" name="data_car" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>