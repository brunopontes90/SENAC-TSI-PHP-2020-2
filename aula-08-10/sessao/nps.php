 <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php'; // executa o arquivo 'sessao.php'

//retorna direto para o menu
include 'header_tpl.php';
include 'index_menu_tpl.php';

echo 'Você aqui ainda é o: '. $_SESSION['login'];

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<br><br>Você deu a nota $nota pelo motivo \"$explicacao\"";

$db = new PDO(	'DSN', 'mysql:dbname=aulaphp;host=localhost', // DSN localhost na maioria dos PCs dos alunos
				'root', // usuário 
				'' // senha
			);

$stmt = $db->prepare('	INSERT INTO nps 
									( nota, explicacao)
								VALUES 
									( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {

	echo '<br><br>Pesquisa gravada com sucesso!';

} else {

	echo '<br><br> :-( deu erro, tente novamente! ';
}

echo '<br><br><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';

include 'footer.php';