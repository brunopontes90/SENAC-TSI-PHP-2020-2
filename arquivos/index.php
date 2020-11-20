<?php

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Nome;Telefone\r\n");
fwrite($fp, "Bruno;11940259474\r\n");

fclose($fp);

echo "<pre>ARQUIVO GERADO\r\n";

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Luiz;11999999999\r\n");
fwrite($fp, "Bono;11988888888\r\n");
fwrite($fp, "Milan;1197777777\r\n");

fclose($fp);

echo "ARQUIVO ALTERADO\r\n";

echo "VEJA O CONTEUDO DO ARQUIVO\r\n";

$fp = fopen('planilha.csv', 'r'); // le o arquivo

while($linha = fgets($fp)){
    echo $linha;
}

fclose($fp);