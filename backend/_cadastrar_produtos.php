<?php

include ('../backend/conexao.php');


try{


$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];

$nome_original_imagem = $_FILES['imagem']['name'];

$extensao = pathinfo($nome_original_imagem,PATHINFO_EXTENSION);

    if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png'){
        echo 'Formato de Imagem inválido';
        exit;
    }

    $hash = md5(uniqid($_FILES['imagem']['tmp_name'],true));

    $nome_final_imagem = $hash.'.'.$extensao;

    $pasta = '../img/upload/';
    
    move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta.$nome_final_imagem);

$sql = "INSERT INTO
                tb_produtos
                (
                    `produto`,
                    `valor`,
                    `tipo`,
                    `marca`,
                    `imagem`
                )VALUES
                (
                    '$produto',
                    '$valor',
                    '$tipo',
                    '$marca',
                    '$nome_final_imagem'
                )
        ";

        $comando = $con->prepare($sql);

        $comando -> execute();

        header('location: ../admin/gerenciar-produtos.php');

    }catch(PDOException $e){
        echo $erro->getMessage();
        die();
    }


?>