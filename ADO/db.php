<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$db = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=MEU-BANCO-NO-PHP';//localhost na maioria dos PCs dos alunos
$user = 'sa';
$password = '9012@TIBruno';

// CONECTA COM O BANCO DE DADOS 'CADASTRO'
try {
    $banco = new PDO($db, $user, $password);
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ativa os erros do PDO
} catch (PDOException $objErro) {
    echo 'SGBD Indisponivel: ' . $objErro->getMessage();
    exit();
}