<!DOCTYPE html>
<?php
session_start();
$_SESSION['nome'] = 'Bruno';

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
        <h3>Qual a probabilidade de você recomendar minha <br>empresa para um colega ou amigo?</h3>
			<br><br>
			<form method="post" action="nps.php">
				Pouco provável 
				<?php 
				for ($i = 1 ; $i <= 10 ; $i++) {
				
					echo "	<input type='radio' id='nps$i' name='nota' value='$i'>\n 
							<label for='nps$i'>$i</label>\n 
							";
				}
				?>
				 Muito provável
				<br>
				<br>
				Explique o motivo de sua nota, por favor.<br>
				<textarea name='explicacao' cols="90" rows="5"></textarea>
				<br>
				<br>
				<input type="submit" name="avaliacao" value="Avaliar">
         </form>
    </center>
</body>
</html>