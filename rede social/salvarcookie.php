<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="painel">
        <div class="cabecalho">
            <h1> Definição de Cookie </h1>
            <a href="index.html" class="botao"> Fazer Nova Postagem       </a><br><br>
        </div>
        <div class="conteudo">
          <?php
          if($_SERVER["REQUEST_METHOD"] == "POST"){

            //$nome = $_POST["usuario"];
            //setcookie("nome", $nome, time() + 86400 * 30, "/");
            //echo "Cookie de nome definido com sucesso. <br>";
            //echo "Nome Usuário: $nome";
            $usuario = $_COOKIE["nome"];
          }else{
            echo "Erro: Requisição Inválida";
          }
          ?>
            
        </div>
        <div class="rodape"></div>
    </div>
</body>
</html>