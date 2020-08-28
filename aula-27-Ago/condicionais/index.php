<?php
ini_set('display_errors', 1);
ini_set('display_setup_errors', 1);
error_reporting(E_ALL);
$clima = 'gelado';

if ($clima == 'gelado'){
    echo '<br><br><br>Meu pé congela<br><br><br>';
}

$bool = '1';

// CONDICIONAL "OPERADOR TERNARIO"
$var = $bool == 1 ? '$bool é igual a 1' : '$bool é diferente de 1';
echo $var. '<br><br>';
$var = $bool === 1 ? '$bool é igual a 1' : '$bool é diferente de 1';
echo $var. '<br><br>';
$var = $bool != 1 ? '$bool é igual a 1' : '$bool é diferente de 1';
echo $var. '<br><br>';

$frase = 'Meu pai tinha um cachorro amarelo e rosa';


// IF COM COMPARADOR DE VALOR E TIPO DE VARIAVEL
if(strpos($frase, 'cachorro') !== false){
    echo "econtrei o cachorro";
}else{
    echo "Não há cachorro algun!";
}

if(strpos($frase, 'Meu')){
    echo "econtrei o Meu<br><br>";
}else{
    echo "<br><br>Não há Meu algun!";
}

echo '<br><br><br><br>';



//SWITCH
switch ($clima) {
    case 'quente':
    case 'tropical':
        echo 'Adoro clima quente!';
        break;
    case 'morno':
        echo 'Morno é melhor que frio!';
        break;
    case 'frio':
        echo 'Frio eu adoro quando esta longe';
        break;
    case 'gelado':
        echo 'Canadá';
        break;
    
    default:
        echo 'Clima desconhecido';
        break;
}


//ELSE IF
if(strpos($frase, 'Meu') !== false){
    echo "econtrei o Meu<br><br>";
}else if((strpos($frase, 'meu') !== false)){
    echo "<br><br>Não há Meu algun!";
}else if((strpos($frase, 'MEU') !== false)){
    echo "<br><br>Não há Meu algun!";
}else {
    echo "<br><br>Não há Meu algun!";
}

echo '<br><br><br><br>';