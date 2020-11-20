<?php

require 'model/dados.php';

 
 if ( isset($_POST['cadastrar']) ) { 
 
	require 'controller/consit_cadastro.php';
	 
	echo '<pre>';
	var_dump($_FILES);
	echo '<pre>';

	$dir_imagens = '../view/imagens/';
	
	if(!is_dir('../view/imagens')){
		
		mkdir($dir_imagens);
	}

	require 'controller/consit_cadastro.php';

	$id = gravar_usuario( $_POST['nome'], $_POST['email'], $_POST['senha']);
	
	if ( $id ) {

		if(isset($_FILES['foto'])){ //verifica se foi enviado arquivo
		
			if($_FILES['foto']['error'] == 0){ // verifica se nao deu erro no upload
	
				$nome_explodido = explode('.', $_FILES['foto']['name']);
				$ext = end($nome_explodido);

				// cria o nome da imagem com algo qualquer no meio usando md5 para criptografar
				$nome_imagem = 'foto_' . md5(rand(-99999999,99999999)) . '_' . $id . '.' . $ext;
				$arquivo_temp = $_FILES['foto']['tmp_name'];
				$detino  =$dir_imagens . $nome_imagem; // troca o nome da foto

				move_uploaded_file($arquivo_temp. $detino);

				vincula_imagem_ao_usuario($id, $nome_imagem);
	
			}
	
		}

		session_start();

		$_SESSION['login'] = $_POST['email'];
		$_SESSION['id'] = $id;

		header('Location: ../');

	} else {

		$erros = ['Não foi possível criar o usário'];
	}

} else {

	$erros = [];
 }
 
 include 'view/cadastro_tpl.php';