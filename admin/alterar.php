<?php
    include '../backend/conexao.php';

    try{

    }catch(PDOException $erro){
        $sql = "SELECT * FROM tb_produtos WHERE id = $id";

        $conexao = $con ->prepare($sql);

        $conexao ->execute();
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar produtos</title>
</head>
<body>
    <div id="container">
        <h3>Gerenciador de Produtos</h3>
    <form action="" method="post">
        <div>
        <label for="produto">Produto</label>
        <input type="text" name="produto" id="produto">
    </div>
    <div>
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">
    </div>
    <div>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoriaa" id="categoria">
    </div>
    <div>
        <label for="fabricante">Fabricante</label>
        <input type="text" name="fabricante" id="fabricante">
    </div>
    <input type="submit" value="Cadastrar">
    </form>

    </div>
</body>
</html>