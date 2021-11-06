<?php
session_start();

// Validação de autenticação
if(!isset($_SESSION['usuario']))
    header("Location: login.php");

/* Validação de autorização
if($_SESSION['usuario']['acesso'] != "aluno")
    header("Location: login.php");*/