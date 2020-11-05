<?php

// DSN para SQL Server
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=MEU-BANCO-NO-PHP';//localhost na maioria dos PCs dos alunos
$user = 'sa';
$password = '9012@TIBruno';

//Como se conectar com o banco
$db = new  PDO($dsn, $user, $password);

