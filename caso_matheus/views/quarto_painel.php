<html>
	<head>
		<title>Controle do quarto</title>
	</head>
	
	<body>
		<h3>Painel de Controle Quarto Matheus</h3>
			
		<table class="table table-hover table-striped" style="border:1px solid #ccc; width: 100%" id="quarto_painel">
			<thead>
				<tr>
					<th>Dispositivo</th>
					<th>Pino</th>
					<th>Ligar</th>
					<th>Desligar</th>
					<th>Estado</th>					
				</tr>
			</thead>
			
			<tbody>
				<! --Varrer o resultado da conexao*/ -->
				<?php
					while($linha = mysqli_fetch_array($consulta_dispositivos)) { 
						echo '<tr><td>'.$linha['nome_dispositivo'].'</td>';
						echo '<td>'.$linha['pino'].'</td>';
					
				?> 
						<td><form action="" method="post">
							<button type="submit" class="btn btn-block btn-success btn-lg" name="turnon" value=<?php echo $linha['pino']; ?>>Ligar</button>
							</form>	
						</td>
						<td><form action="" method="post">
							<button type="submit" class="btn btn-block btn-success btn-lg" name="turnoff" value=<?php echo $linha['pino']; ?>>Desligar</button>
							</form>	
						</td>
						<td>
							<?php
								if($linha['estado'] == 1){
									echo'<span style="color: Green;">
										<i class="fas fa-circle"></i>
									</span>';
								}
								else {
									echo '<span style="color: Red;">
										<i class="fas fa-circle"></i>
									</span>';
								}
							?>
						</td>
						</tr>
				<?php
					
					}
				?>
			</tbody>	
		</table>
	</body>
</html>

<?php 

if (isset($_POST['turnon'])) {
	#$a = shell_exec("sudo python3 /var/www/html/gpio/gpio05/acender.py");
	#echo $a;
	echo "Acendeu!";
	#echo  '<br />The ' . $_POST['turnon'] . ' ligou<br />';
	#shell_exec("sudo python /var/www/painel.com/public_html/scripts/acender.py");
	$num_pino = $_POST['turnon'];
	$query = "UPDATE dispositivos SET estado = '1' WHERE dispositivos.pino = $num_pino";
	mysqli_query($conexao, $query);
	header('location:index.php?pagina=quarto_painel');
}
 
else if (isset($_POST['turnoff'])) {
	#$a = shell_exec("sudo python3 /var/www/html/gpio/gpio05/acender.py");
	#echo $a;
	echo "Apagou!";
	#echo  '<br />O pino ' . $_POST['turnoff'] . ' foi desligado <br />';
	#shell_exec();
	$num_pino = $_POST['turnoff'];
	$query = "UPDATE dispositivos SET estado = '0' WHERE dispositivos.pino = $num_pino";
	mysqli_query($conexao, $query);
	header('location:index.php?pagina=quarto_painel');
} 