<title>Inserir Dispositivo</title>
<h1>Inserir novo dispositivo</h1>

<form method="post" action="processa_dispositivo.php">
	<br>
	<p>Selecione o aluno</p>
	<label>Nome dispositivo:</label><br>
	<input type="text" name="nome_dispositivo" placeholder="Insira o nome do dispositivo">
	
	<br><br>
	
	<p>Selecione o pino da GPIO</p>
	<select name="num_pino">
		<option>Pino</option>
		<?php 
			while($linha = mysqli_fetch_array($consulta_gpio)) { 
				echo '<option value="'.$linha['numero'].'">'.$linha[
					'numero'].'</option>';
			}
		?>
	</select>
	<br><br>
	<input type="submit" value="Cadastrar dispositivo">
	
</form>