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
        <div id="tabela">
        <table>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Fabricante</th>
            </tr>

        </table>



        </div>
    
    </div>
</body>
</html>