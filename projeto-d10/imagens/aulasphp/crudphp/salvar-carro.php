<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $marca = $_POST["marca"];
            $cor = $_POST["cor"];
            $data_car = $_POST["data_car"];
            
            $sql = "INSERT INTO carros (nome, marca, cor, data_car) VALUES ('{$nome}', '{$marca}', '{$cor}', '{$data_car}')";

            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else {
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $marca = $_POST["marca"];
            $cor = $_POST["cor"];
            $data_car = $_POST["data_car"];

            $sql = "UPDATE carros SET 
                            nome='{$nome}', 
                            marca='{$marca}', 
                            cor='{$cor}', 
                            data_car='{$data_car}' 
                            WHERE 
                            id=".$_REQUEST["id"];
                
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else {
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";
                }
            break;
        
        case 'excluir':
            
            $sql = "DELETE FROM carros WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else {
                print "<script>alert('Não foi possivel excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
                }
            break;
    }