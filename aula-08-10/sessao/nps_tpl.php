<!DOCTYPE html>
<?php
session_start();
$_SESSION['user'] = 'Bruno';

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    
</head>
<body>
    <center>
    <h3>Modelo de Net Promoter Score</h3>
        <form action="nps.php" method="post">
        Pouco provavel
        <?php
            for($i = 1; $i <= 10; $i++){
                echo "<input type='radio' id='nps$i' name='nota' value='$i'>\n
                <label for='nps$i'>$i</label>";    
        }
              
        ?>
        Muito provavel
        <br><br>
        Explique o motivo de sua nota, por favor.<br>
            <textarea name="explicacao" cols="90" rows="5"></textarea>
            <input type="hidden" name="protocolo" value='<?php echo rand(0.10000) ?>'>
        <br><br>
        <input type="submit" name="avaliacao" value="Avaliar">
         </form>
    </center>
</body>
</html>