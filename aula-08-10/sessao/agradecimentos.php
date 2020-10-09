<?php

session_start();
echo 'Você é o ' . $_SESSION['user'];


$nota = $_GET['nota']; // Existe o REQUEST  que disponibiliza os valores do GET ou $ POST
$protocolo = $_GET['$protocolo'];

if ($nota >= 9) {
    # code...
    echo "Estamos muito felizes";
}else{
    echo "O que podemos fazer para voce nos dar uma nota 10?";
}

echo "<br><br>Seu protocolo é o $protocolo";