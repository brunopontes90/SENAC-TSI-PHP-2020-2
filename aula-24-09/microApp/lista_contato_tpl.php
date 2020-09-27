<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    <br><br>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    <br><br>
    
</head>
<body>
<center>
    <a href="./">+ Novo contato</a>
    <br><br>
    <table border="1" width="50%">
        <tr>
            <td>ID</td><td>Nome</td><td>WhatsApp</td><td>Ação</td>
        </tr>
            <?php
        if(count($tabela) > 0){ // Se tiver dado na tabela
            foreach($tabela as $id => $reg){
                echo "<tr>
                <td>ID</td>
                <td>{$reg['nome']}</td>
                <td>{$reg['whatsapp']}</td>
                <td>
                    <a href='apaga_contato.php?id=$id'>Apagar</a>
                    <a href='edita_contato.php?id=$id'>Editar</a>
                </td>
            </tr>";
            }
        }else{// se nao tiver dado na tabela 
            echo " <tr>
            <td colspan = '4'>Não há dados</td>
        </tr>";
        }
            ?>
    </table>
</center>
</body>
</html>
</body>
</html>