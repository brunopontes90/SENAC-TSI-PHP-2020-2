<?php
define('DSN', 'mysql:dbname=aulaphp;host=localhost'); //localhost na maioria dos PCs dos alunoas
define('DB_USER', 'root');
define ('DB_PASS', '');


ini_set('display_errors',1); // no ambiente de produção nao mosta erro ,0 e ,1 para mostrar
ini_set('display startup errors',1);
error_reporting(E_ALL);




//CRIANDO O BANCO
$objBanco = new PDO(DSN, DB_USER, DB_PASS);

try {
    //code...
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $objErro) {
    //throw $th;
    echo 'SGBD Indisponivel: ' . $objErro -> getMessage();
    exit();
}




// Preparo a consulta
$objStmt =  $objBanco -> prepare(' INSERT INTO nps (nota, explicacao) VALUES (:nota, :explicacao)');


// Substitui :nota e :explicacao pelo valor enviado pelo usuario
$objStmt ->bindParam(':nota', $nota);
$objStmt ->bindParam(':explicacao', $explicacao);

// Executar
if ($objStmt -> execute()){
    $msg = 'Informação gravada com sucesso!';
}else{
    $msg = ':-( deu erro, tente novamente';
}
echo '<br><br><a href="./agradecimento.php?nota='. $nota . '&protocolo=' .  $protocolo . '">Seguir</a>';

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];


// Chama o template (Front-End)
include 'nps_tpl.php';


echo "<br><br>Voce deu a nota $nota pelo motivo \"$explicacao\"";

