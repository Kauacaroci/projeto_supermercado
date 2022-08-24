<?php

    include ('conexao.php');

    try{
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM tb_login WHERE email = '$usuario' AND BINARY senha =  '$senha';";

        $comando = $con->prepare($sql);

        $comando->execute();

        $dados = $comando->fetchALL(PDO::FETCH_ASSOC);
        
?>