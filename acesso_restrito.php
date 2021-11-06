<?php require "verificar.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta lang="pt-br" />
    </head>
    <body>
        <h1>Seja bem vindo!</h1>
        <p>Seu acesso foi identificado como <?php echo $_SESSION['usuario']['nome'] ?>, se deseja sair, <a href="logout.php">clique aqui</a></p>
    </body>
</html>