<?php

    include 'backend/conexao.php';

    try{

        $sql = "SELECT * FROM tb_produtos";

        $comando = $con->prepare($sql);

        $comando->execute();

        $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

    }catch(PDOException $erro){
        echo $erro->getMessage();
    
    }
    
    ?>
    

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <h3>Listar Produtos</h3>
        <?php
          foreach($dados as $p):
        ?>
        <div class="grid-produtos">
        <figure class="figure-produtos">
            <img class="img-produtos" src="img/vmercado.jpg" alt="Imagem dos produtos">
            <figcaption>
                <h4><?php echo $p['produto'] ?></h4>
                <h4>$<?php echo $p['valor']?></h4>
                <h4><?php echo $p['categoria'] ?></h4>
                <h4><?php echo $p['fabricante'] ?></h4>
            </figcaption>
        </figure>
    <?php 
    endforeach ;
     ?>

    </div>
    </div>
    
</body>
</html>