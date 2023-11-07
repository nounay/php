<?php
    $nomeServidor = "sql301.infinityfree.com"; //localhost
    $username = "if0_35249644"; //root
    $senha = "kVAmQtFKzhn|";
    $nomeBanco = "if0_35249644_rede_banco";

    $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

    if($conexao -> connect_error){
        die("Conexão com o banco de dados falhou!". $conexao -> connect_error);
   }
?>