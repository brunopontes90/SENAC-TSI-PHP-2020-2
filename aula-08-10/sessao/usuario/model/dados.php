<?php

chdir(__DIR__); // constante magica

require_once '../../db.php';

function listar(): array{

    global  $db;

    $r = $db->query("SELECT id, nome, email FROM usuario");
    $reg = $r->fetchAll();
    
    return is_array($reg) ? $reg : [];
}

function ja_existe_email(string $email): bool {

    global $db;

    $stmt = $db->prepare('	SELECT id FROM usuario WHERE email = :email');

    $stmt->bindParam('email', $email);

if ( empty($email)) 

    global $db; 
    
    $stmt = $db->prepare('	SELECT id FROM usuario WHERE email = :email');

    $stmt->bindParam('email', $email);

    $stmt->execute();

    $registro = $stmt->fech();

    return is_numeric($registro['id']) ? true : false;


}