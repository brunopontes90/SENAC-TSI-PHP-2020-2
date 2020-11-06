<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'db.php';

/*

EXEMPLO DECOMO CRIAR SENHA 
TECNICA SALT
CRIA UMA CRIPTOGRAFIA
$pass = password_hash(123456,password_default);

*/



if (isset($_SESSION['login'])) { //caso o login estiver logado no sistema

    //retorna direto para o menu
    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer.php';

}elseif (isset($_POST['entrar'])) { //caso o user tenha acabado de preencher o form de login
    
    //Verficar se existe o usuário e pegar o hash da senha
    $login = filter_var($_POST['login'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    $r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['senha'];

    //Comprara a senha passada pelo usuário com o hash armazenado no DB
    if (password_verify( $senha, $hash) ) {

        //Cria vetor no SESSION para o login do user e verifica se existe esse login nas outras paginas
        $_SESSION['login'] = $login;

        //retorna direto para o menu
        include 'header_tpl.php';
        include 'index_menu_tpl.php';
        include 'footer.php';

    }else{
        $msg = 'Credenciais invalidas, tente novamente';
        include 'index_tpl.php';
    }
}else { //Caso o user tenha entrado pela 1° vez no site

    include 'index_tpl.php'; //se nao estiver entra no form

}