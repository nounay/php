<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Postagem</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="painel">
        <div class="cabecalho">
            <h1> Nounay Wave </h1>
        </div>

        <div class="conteudo">
            <h2> Postagem Efetuada com Sucesso! </h2>
            <?php
            $usuario = "Gislaine";
            setcookie("nome", $usuario, time() + 86400 * 30, "/");

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $postagem = $_POST["postagem"];

                echo "$usuario postou: $postagem";


                session_start();
                if(!isset($_SESSION["postagens"]))
                    $_SESSION["postagens"] = array();
                
                array_push($_SESSION["postagens"], $postagem);

              
            }
            ?>

        </div>
        <div class="rodape"> <br>
           
        <a href="index.html" class="botao"> Fazer Nova Postagem       </a><br><br>
        <a href="cookie.html" class="botao"> Cadastrar Usuario </a><br><br>
        <a href="usuario.html" class="botao">       Buscar        </a><br><br>
        <a href="lista.php" class="botao"> Lista de Posts </a>
        </div>

    </div>
    
</body>
</html>