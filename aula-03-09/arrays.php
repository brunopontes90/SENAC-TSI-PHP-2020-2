<?php
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', 1);
ini_set('display_setup_errors', 1);
error_reporting(E_ALL);

//Solução com muitas linhas (sem vetor)
$domingo 	= 0;
$segunda 	= 1;
$terca		= 2;
$quarta		= 3;
$quinta		= 4;
$sexta		= 5;
$sabado		= 6;

echo '<br><br>';

var_dump( date('d/m/Y') ); //Para fazer o debug (verbose) 

echo '<br><br>';

switch ( date('w') ) {

 	case $domingo:
 		echo 'Domingo';
 		break;
 	case $segunda:
 		echo 'Segunda';
 		break;
 	case $terca:
 		echo 'Terça';
 		break;
 	case $quarta:
 		echo 'Quarta';
 		break;
 	case $quinta:
 		echo 'Quinta do switch<br>';
 		break;
 	case $sexta:
 		echo 'Sexta';
 		break;
 	case $sabado:
 		echo 'Sábado'; 		
 		break; 	
 } 

//Solução com poucas linhas (com vetor)
$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

echo "Hoje é " . $semana[$hoje];
echo "<br><br>";

unset($semana);

$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terça'] = 2;
$semana['Quarta'] = 3;
$semana['Quinta'] = 4;
$semana['Sexta'] = 5;
$semana['Sábado'] = 6;


$hoje = date('l');

var_dump($hoje);

echo "Hoje é " . $semana[$hoje]. " com indice alfanumerico";

echo "<br><br>";

var_dump($semana);

echo '<br><br>';

//CONSTANTE NO PHP
define('MUNDO', 'Raimundo Nonato');
define('RES_P_PAG', 10);

for($i = 0; $i < RES_P_PAG; $i++){
	echo "Resultado $i<br>";
}

echo 'Olá' . MUNDO . '<br><br>';

$usuario = ['nome' => 'Luiz Bono', 
			'idade' => 25, 
			'peso' => 67.8, 
			'signo' => 'aquariano'];

//Escrever
//O professor Luiz Bono tem 25 anos, pesa 67,8 Kg e é aquariano

echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa {$usuario['peso']} e é {$usuario['signo']}.";


//MATRIZ

$professores = array(	0 => array(	'nome' 	=> 	'Luiz Bono',
									'idade'	=>	25,
									'peso'	=>	67808.44,
									'signo'	=>	'aquariano'),
						1 => array(	'nome' 	=> 	'Thiago Claro',
									'idade'	=>	35,
									'peso'	=>	54808.44,
									'signo'	=>	'sagitário'),
						2 => array(	'nome' 	=> 	'Thyago Quintas',
									'idade'	=>	21,
									'peso'	=>	7808.44,
									'signo'	=>	'leonino'));

var_dump($professores);
?>

<table border = '1'>
<tr><td>Id</td> <td>Nome</td> <td>Idade</td> <td>Peso</td> <td>Signo</td></tr>
<?php
foreach($professores as $linahs => $professore){
	echo "<tr><td>Linhas</td>
		<td>{$professores['nome']}</td>
		<td>{$professores['idade']}</td>
		<td>{$professores['peso']}</td>
		<td>{$professores['signo']}</td></tr>"

}
?>

</table>