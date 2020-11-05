<?php
ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=CADASTRO'; //localhost na maioria dos PCs dos alunos
$user = 'sa';
$password = '9012@TIBruno';

// Exemplo de Try Catch
try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $objErro) {
    echo 'SGBD Indisponivel: ' . $objErro -> getMessage();
    exit();
}

$sql = "SELECT id, email, senha FROM cadastrando";

foreach ($db->query($sql) as $registro) {
    echo "Email: ID:{$registro['id']} Email:{$registro['email']} Senha: {$registro['senha']}<br>";
}
