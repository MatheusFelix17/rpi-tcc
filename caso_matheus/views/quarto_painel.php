<html>
	<head>
		<title>Controle do quarto</title>
	</head>
	
	<body>
		<h3>Painel de Controle Quarto Matheus</h3>
			
		<table class="table table-hover table-striped" style="border:1px solid #ccc; width: 100%">
			<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th>Objeto</th>
					<th>Acender</th>
					<th style="width: 10px">Apagar</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>1-</td>
					<td><b>Lâmpada</b> [GPIO 12]</td>
					<td>
						<form action="" method="post"> <!--/* get enviado url; post criptografado: action qual endereco que sera enviado; eh a nossa pagina pro ex o processa_curso.php */-->
							<button type="submit" class="btn btn-block btn-success btn-lg" name="turnon" value="Acender">Acender</button>
						</form>
					</td>
					<td>
						<form action="" method="post">
							<button type="submit" class="btn btn-block btn-success btn-lg" name="turnoff" value="Apagar">Apagar</button>
						</form>		
					</td>
				</tr>	
			</tbody>
		</table>		
	</body>
</html>

<?php 

if (isset($_POST['turnon'])) {
 #$a = shell_exec("sudo python3 /var/www/html/gpio/gpio05/acender.py");
 #echo $a;
	echo "Acendeu!";
}
 
else if (isset($_POST['turnoff'])) {
 #$a = shell_exec("sudo python3 /var/www/html/gpio/gpio05/acender.py");
 #echo $a;
	echo "Apagou!";
} 