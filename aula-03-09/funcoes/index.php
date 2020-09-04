<?php
function operacao(float $num1, float $num2, string $operacao): ?float{
    switch($operacao){
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '/':
            return $num1 / $num2;
        case '*':
            return $num1 * $num2;
        default:
            return 0.0;

    }
}

echo "<br>O resultado é: ". operacao(2.5, 2.5, '*'). "<br>";

echo "<br><br>";

function semana(int $dia): string{
    switch($dia){
        case 0:
            return "Domingo";
        case 1:
            return "Segunda-feira";
        case 2:
            return "terça-feira";
        case 3:
            return "Quarta-feira";
        case 4:
            return "Quinta-feira";
        case 5:
            return "Sexta-feira";
        case 6:
            return "Sabado";
        default:
            return "ERRO!!";
    }
}

echo "O dia da semana é: ". semana(0). "<br>";

echo "<br><br><br>";

$nome = 'Bruno';

function muda_nome(string &$var): string{
    $var = 'Outro nome';
    return $var;
}

function exemplo($param1, $param2){
    return 'Isso também funciona';
}

echo "<br>A função retornara: ".muda_nome($nome)."<br><br>";