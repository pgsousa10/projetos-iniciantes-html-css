<h1>Listar carros</h1>
<?php
    $sql = "SELECT * FROM carros";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th> # </th>";
            print "<th> Nome </th>";
            print "<th> Marca </th>";
            print "<th> Cor </th>";
            print "<th> Data do carro</th>";
            print "<th> Açoes</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->marca."</td>";
            print "<td>".$row->cor."</td>";
            print "<td>".$row->data_car."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    
                    <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;} \" class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

?>