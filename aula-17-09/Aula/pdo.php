<?php
require_once 'config.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

$consulta = $objBanco -> query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

echo "<pre>";

var_dump($objBanco -> errorInfo()); // Super important para debug

foreach($consulta as $registro){
    echo "ID: {$registro['id']} NOME: {$registro['nome']}  WZAP: {$registro['whatsapp']}<br>";
}


// inserir dados no banco
if ($insere = $objBanco -> query("INSERT INTO contatos 
                        (nome, whatsapp) 
                    VALUES 
                        ('{$contato['nome']}', '{$contato['whatsapp']}')")){
echo 'Contato inserido com sucesso!';
}else{
    echo "Não foi possivel inserir com sucesso<br>";
}

// Deletando arquivos do banco

if ($delete = $objBanco -> query('DELETE FROM contatos WHERE id > 20')) {
    echo "Registro apagado com sucesso!<br>";
}else{
    echo "Não foi possivel apagar o registro<br>";
}


echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";