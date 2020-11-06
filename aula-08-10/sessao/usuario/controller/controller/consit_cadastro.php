<?php
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;

$email = strtolower($email); // trata o email para minusculo

$erros = [];

// VERIFICA SE NOME TEM 2 OU MAIS CARACTERES
if (strlen(($nome) < 2)) {
    
    $erros[] = 'O nome tem que ter ao  menos 2  caracteres';
}

// VERIFICA SE O E-MAIL É VALIDO
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    $erros[] = 'E-mail invalido';
    
}elseif (ja_existe_email($email)) {
    
    $erros[] = 'E-mail já cadastrado';

}{

}

// VERIFICA SE A SENHA TEM NO MINIMO 8 CARACTERES
if (strlen($senha < 8)) {
    
    $erros[] = 'A senha precisa ter no minimo 8 caracteres';

// VERFICA SE A CONFIRMAÇÃO DE SENHA BATE
}elseif ($senha != $conf_senha) {
    
    $erros[] = 'A confirmação de senha não é valida';

}

