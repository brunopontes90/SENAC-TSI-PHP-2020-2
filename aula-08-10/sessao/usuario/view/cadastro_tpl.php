<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>
</head>
<body>
<br><br>
<br><br>
    <center>
    <h1>Crie sua conta :)</h1>
        <table border="1">
            <tr>
                <td>
                    <form method="post" action="./cadastro.php" enctype='multpart/form-data'>
                        <br>
                        <font color="red">
                        <?php
                            if(count($erros)>0){
                                foreach($erros as $erro){
                                    echo $erro.'<br>';
                                }
                            }

                        ?>
                        </font>
                        <br>
                        <br>
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" placeholder="Nome" require>
                            <br><br>            

                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" require>
                            <br><br>
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="Senha" require>
                            <br>
                            <label for="conf_senha">Confirme a senha</label>
                            <input type="password" id="conf_senha" name="conf_senha" placeholder="Confirme a senha" require>
                            <br><br>
                            <label for="foto">Foto</label>
                            <input type="file" id="foto" name="foto" required>
                            <br><br>
                            <center>
                            	<input type="submit" name="cadastrar"  value="Cadastrar">
                            </center>
                            <br><br>
                            
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>