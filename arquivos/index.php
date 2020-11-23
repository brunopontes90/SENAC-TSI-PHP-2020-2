<?php

// CHAMA O ARQUIVO
$fp = fopen('planilha.csv', 'w');

// INSERE NO ARQUIVO
fwrite($fp, "Nome;Telefone\r\n");
fwrite($fp, "Bruno;11940259474\r\n");

// FECHA O ARQUIVO
fclose($fp);

echo "<pre>ARQUIVO GERADO\r\n";

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Luiz;11999999999\r\n");
fwrite($fp, "Bono;11988888888\r\n");
fwrite($fp, "Milan;1197777777\r\n");

// FECHA O ARQUIVO
fclose($fp);

echo "ARQUIVO ALTERADO\r\n";

echo "VEJA O CONTEUDO DO ARQUIVO\r\n";

// le o arquivo
$fp = fopen('planilha.csv', 'r');

while($linha = fgets($fp)){
    echo $linha;
}

// FECHA O ARQUIVO
fclose($fp);