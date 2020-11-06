<?php

require 'model/dados.php';

if (isset($_POST['cadastrar'])) {

    require 'controller/consit_cadastro.php';
    
}

include 'view/cadastro_tpl.php';