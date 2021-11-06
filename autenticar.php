<?php
session_start();

$usuario = [
    'nome' => $_REQUEST['txtNome'],
    'senha' => $_REQUEST['txtSenha'],
    'acesso' => "aluno"
];

$_SESSION['usuario'] = $usuario;
header("Location: acesso_restrito.php");