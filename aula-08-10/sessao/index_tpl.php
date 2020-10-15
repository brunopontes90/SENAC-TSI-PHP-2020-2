<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>
</head>
<body>
<br><br><br><br>
    <center>
        <table border="1">
            <tr>
                <td>
                    <form method="post">
                        <br>
                        <?php
                            if(isset($msg)) echo $smg;
                        ?>
                        <br>
                        <br>
                            <label for="login">Login</label>
                            <input type="text" name="login">
                            <br><br>
                            <label for="senha">Senha</label>
                            <input type="password" name="senha">
                            <br><br>
                            <input type="submit" name="entrar">
                            <br><br>
                            
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>