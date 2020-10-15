<?php

session_start();

echo 'Outro diretorio'. $_SESSION['nome'];
$nota = $_GET['nota']; // Existe o $_REQUEST que disponibiliza os valores de $_GET ou $_POST