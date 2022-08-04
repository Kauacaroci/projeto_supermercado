<?php

include '../backend/conexao.php';


try{
    
    $produto= $_POST['produto'];
    $valor = $_POST['valor'];
    $categoria= $_POST['categoria'];
    $fabricante= $_POST['fabricante'];
    
    $sql = "INSERT INTO
                tb_produtos
                (   
                    `produto`,
                    `valor`,
                    `categoria`,
                    `fabricante`
                )VALUES
                (
                    '$produto',
                    '$valor',
                    '$categoria',
                    '$fabricante'
                )
        ";
  
    $comando = $con ->prepare($sql);

    $comando->execute();

    echo "Cadastro realizado com sucesso!";

}catch(PDOException $erro){
    echo $erro->getMessage();

}

   
?>