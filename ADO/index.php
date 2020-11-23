<?php
// INCLUI A CONEXÃO COM DB
require 'db.php';

// ABRE O ARQUIVO CSV
$arquivo = fopen('CIDADES_CAPITAIS_IBGE.csv','r');

// LE O CONTEUDO DO CSV
$i = 0;
while($linha = fgets($arquivo)){
    $i++;
    echo "<pre>$linha</pre>";
    if($i == 1) continue; //Ignora o título
    $linha = explode(';', $linha); //transforma a linha em um array
    end($linha);

    //Remove a ',' para '.' - Float padrão americano
    $linha[2] = str_replace(",", ".", $linha[2]);
    $linha[3] = str_replace(",", ".", $linha[3]);

    $obj = $banco->prepare("INSERT INTO IMPORTACAO (id_cidade, nome, latitude, longitude) VALUES (?,?,?,?)");
    //$obj->bindParam(1, $linha[0]);
    //$obj->bindParam(2, $linha[1]);
    //$obj->bindParam(3, $linha[2]);
    //$obj->bindParam(4, $linha[3]);

    // EXECUTAR
    try {
        $obj->execute($linha);
    }catch(Exception $e){
        echo 'Deu erro: ';
        echo $e->getMessage();
    }
}

// FECHA O ARQUIVO
fclose($arquivo);