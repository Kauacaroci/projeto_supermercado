<?php

include ('../backend/conexao.php');



try{

$imagem = $_FILES['imagem'];    
$id = $_POST['id'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];

    $sql = "UPDATE tb_produtos SET `produto` = '$produto', `valor` = '$valor', `tipo` = '$tipo', `marca` = '$marca', `imagem` = $imagem WHERE id = '$id' ;";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    header('Location: ../admin/alterar.php?id='.$id);

}catch(PDOException $erro){
    echo $erro -> getMessage();
}

?>