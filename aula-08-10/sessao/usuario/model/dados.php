<?php

chdir( __DIR__ );
 
 require_once '../../db.php';
 
 function listar(): array 
 {
 	global $db;
 
 	$r = $db->query('SELECT id, nome, email FROM usuario');
 	$reg = $r->fetchAll();
 	
 	return is_array($reg) ? $reg : [];
 }
 
 function ja_existe_email( string $email ): bool
 {
 	if ( empty($email) ) return false;
 
 	global $db;
 
 	$stmt = $db->prepare('SELECT id FROM usuario WHERE email = :email');
 
 	$stmt->bindParam(':email', $email);					
 
 	$stmt->execute();
 
 	$registro = $stmt->fetch();
 
 	return is_numeric($registro['id']) ? true : false;
}


function vincula_imagem_ao_usuario(int $id, string $nome_imagem): bool{

	global $db;
 
	$stmt = $db->prepare('UPDATE  usuario SET foto = :email WHERE id = :id');

	$stmt->bindParam(':foto', $nome_imagem);					
	$stmt->bindParam(':id', $id);					

	return $stmt->execute();

}

function get_imagem_usuario(int $id): array{
	global $db;
 
	$stmt = $db->prepare('SELECT foto FROM usuario WHERE id = :id');

	$stmt->bindParam(':id', $id); //associa o label com a variavel
	$stmt->execute(); // executa

	return $stmt->fechAll(); // retorna o array completo
}

function gravar_usuario( string $nome, string $email, string $senha): ?int 
{
	global $db;

	$senha = password_hash( $senha, PASSWORD_DEFAULT);

	$stmt = $db->prepare('	INSERT INTO usuario 
								( nome, email, senha) 
							VALUES 
								( :nome, :email, :senha)');

	$stmt->bindParam(':nome', $nome);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':senha', $senha);

	$stmt->execute();

	return $db->lastInsertId();
}

function apagar_usuario( int $id ): bool
{
	if ( is_numeric($id) ) {

		global $db;

		if ( $db->exec("DELETE FROM usuario WHERE id = $id") > 0 ) {

			return true;

		} else {

			return false;
		}

	} else {

		return false;
	}
 }