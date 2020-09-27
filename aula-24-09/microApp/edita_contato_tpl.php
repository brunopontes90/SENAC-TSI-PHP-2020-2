<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10-09-2020 - Banco de Dados</title>
</head>

<body>
    <center>
        <a href='lista_contato.php'>Listar</a>
        <a href='lista_contato.php'>Editar</a>
        <a href='lista_contato.php'>Apagar</a><br><br>
        <h1>Edite seu contato</h1>
        <br>
        <?php
            if (isset($msg)) {
                # code...
                echo $msg;
            }
        ?>
        <br><br>
        <form action="edita_contato.php" method="POST">
            Nome: <input type="text" name="nm" value="<?php echo $contato['nome']?>"><br> 
            Whatsapp: <input type="text" name="whats" value="<?php echo $contato['whatsapp']?>">
            <input type="hidden" name="id" value="<?php echo $contato['id']?>"?>
            <br><br>
            <input type="submit" value="Enviar">

        </form>
    </center>
</body>

</html>