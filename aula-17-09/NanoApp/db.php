<?php
require_once 'config.php';
$objBanco = new PDO(DSN, DB_USER, DB_PASS);

// Exemplo de Try Catch
try {
    //code...
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $objErro) {
    echo 'SGBD Indisponivel: ' . $objErro -> getMessage();
    exit();
}