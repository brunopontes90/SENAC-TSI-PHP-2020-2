<?php

require_once 'db.php'; //Importa o banco de dados

//Se for clicado com o botao gravar, faça UPDATE
if (isset($_POST['id'])) {
    # code...
    $id = preg_replace('/\D/', '', $_POST['id']);
    $nome = $_POST['nm'];
    $whatsapp = $_POST['whats'];

    // Preparo a consulta
$objStmt =  $objBanco -> prepare(' UPDATE contatos 
                                    SET
                                        nome = :nm, whatsapp = :wzap
                                    WHERE 
                                        id = :id');

$objStmt -> bindParam(':id', $id);
$objStmt -> bindParam(':nm', $nome);
$objStmt -> bindParam(':wzap', $whatsapp);

if ($objStmt -> execute()) {
    # code...
    $msg = 'Contato editado com sucesso';
}else{
    $msg = ':-( deu erro, tente novamente';
}

}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

//Evita SQL Injection - Mas prefira a consulta preparada
$id = preg_replace('/\D/', '', $_GET['id']);

$contato = array();

$lista_sql = "SELECT 
                    id, nome, whatsapp 
              FROM 
                    contatos 
              WHERE 
                    id = $id";
foreach($objBanco -> query($lista_sql) as $registro){
    $contato = $registro;
}

include 'edita_contato_tpl.php';