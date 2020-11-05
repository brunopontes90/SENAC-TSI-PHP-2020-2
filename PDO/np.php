<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Conecte-se a um banco de dados MySQL usando a invocação de driver */
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=CLIENTE'; //localhost na maioria dos PCs dos alunos
$user = 'sa';
$password = '9012@TIBruno';

$db = new PDO($dsn, $user, $password);

// COMO FAZER UMA CONSULTA SELECT
$sql = "SELECT nome, telefone FROM cliente";

echo "<pre>";

foreach ($db->query($sql) as $reg) {
    echo "Sr(a) {$reg['nome']}, seu telefone{$reg['telefone']} sera bloqueado se a conta não for paga \n\n";

}


// COMO FAZER DELETE
if($db->query('DELETE FROM cliente WHERE id = 2')){

echo "ID 2 apagado com sucesso!\n\n";

}else{
    echo "Erro ao apagar o ID\n\n";
}

foreach ($db->query($sql) as $reg) {
    echo "Sr(a) é {$reg['nome']}, seu telefone{$reg['telefone']} sera bloqueado se a conta não for paga \n\n";

}


// COMO FAZER UPDATE
if($db->query('UPDATE cliente SET nome = "Jubileu"  WHERE id = 2')){

    echo "ID 2 apagado com sucesso!\n\n";
    
    }else{
        echo "Erro ao apagar o ID\n\n";
    }
    
    foreach ($db->query($sql) as $reg) {
        echo "Sr(a) {$reg['nome']}, seu telefone: {$reg['telefone']} sera bloqueado se a conta não for paga \n\n";
    
    }



// COMO FAZER INSERT
if($db->query('INSERT INTO cliente (id, nome, telefone)  VALUES (2, "Marcos Sakuma", 5511912345678)')){

    echo "ID 2 gerado novamente com sucesso!\n\n";
    
}else{
        echo "Erro ao tentar gerar novamente o ID 2\n\n";
}
    
foreach ($db->query($sql) as $reg) {
    echo "Sr(a) {$reg['nome']}, seu telefone: {$reg['telefone']} sera bloqueado se a conta não for paga \n\n";

}