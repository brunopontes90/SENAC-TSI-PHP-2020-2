<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Conecte-se a um banco de dados MySQL usando a invocação de driver */
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=CLIENTE'; //localhost na maioria dos PCs dos alunoas
$user = 'sa';
$password = '9012@TIBruno';

$db = new PDO($dsn, $user, $password);

$sql = 'SELECT nome, telefone FROM cliente';

foreach ($db->query($sql) as $registro) {
    echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}<br>";
}

