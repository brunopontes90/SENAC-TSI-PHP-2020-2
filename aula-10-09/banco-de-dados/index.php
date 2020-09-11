<?php

// mysqli_connect("localhost", "my_user", "my_password", "my_db");

// $serverName = 'localhost';
// $user = 'root';
// $password = '';
// $db_name = 'aulaphp';
$db =  mysqli_connect('localhost',  'root', '', 'aulaphp'); // conecta no SGBD

$query =   mysqli_query($db, //faz consulta no banco - cria tabela 
                        'CREATE TABLE IF NOT EXISTS contatos 
                    (   id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        nome VARCHAR(255) NOT NULL,
                        whatsapp BIGINT )');

if($query){
    echo 'Tabela criada com sucesso!<br>';
}else{
    echo 'A tabela contatos nao pode ser criada: ';
    echo mysqli_connect_error();
}

$contato  = ['nome' => 'Bruno Pontes', 'whatsapp' => '5511940259474'];

//insere no banco
if (mysqli_query($db, //Aspas duplas , pois há variavel no meio da String 
                    "INSERT INTO contatos 
                        (nome, whatsapp) 
                    VALUES 
                        ('{$contato['nome']}', '{$contato['whatsapp']}')")){
echo 'Contato inserido com sucesso!';
}

//lista o que esta na tabela

$query = mysqli_query($db, 'SELECT 
                                id, nome, whatsapp
                            FROM
                                contatos');
echo '<table border = "1">';
echo "  <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>WHATSAPP</td>
        </tr>";
while($registro = $query -> fetch_assoc()){
echo "  <tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td>{$registro['whatsapp']}</td>
        </tr>";
}
echo "</table>";

//Apaga o que esta na tabela
if (mysqli_query($db, 'DELETE FROM contatos WHERE id < 10')) {
    echo "Registro apagado com sucesso!";
}else{
    echo "Não foi possivel apagar o registro";
}

//$_POST $_GET $_REQUEST - vetores super globais para receber dados do usuario

echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";