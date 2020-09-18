<?php

require_once 'db.php';

// Como evitar SQL injection

// Preparo a consulta
$objStmt =  $objBanco -> prepare(' INSERT INTO contatos 
                                        (nome, whatsapp) 
                                    VALUES 
                                        ( :nm , :wzap)');


// Substitui :nm e :wzap pelo valor enviado pelo usuario
$objStmt ->bindParam(':nm', $_POST['nm']);
$objStmt ->bindParam(':wzap', $_POST['whats']);

// Executar

if ($objStmt -> execute()){
    $msg = 'Obrigado por se cadastrar';
}else{
    $msg = ':-( deu erro, tente novamente';
}

// Chama o template (Front-End)
include 'grava_contato_tpl.php';