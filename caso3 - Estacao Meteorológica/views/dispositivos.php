<a class="btn btn-success" href="?pagina=inserir_dispositivo">Cadastrar dispositivo</a> <!-- link que vai apontar pra pag inserir nova matricula; se n tiver nada redireciona pra home -->
<title>Dispositivos</title>
<table class="table table-hover table-striped" style="border:1px solid #ccc; width: 100%" id="matriculas">
	<thead>
		<tr>
			<th>Nome dispositivo</th>
			<th>Pino</th>
			<th>Deletar Dispositivo</th>
		</tr>
	</thead>
	
	<tbody>
		<! --Varrer o resultado da conexao*/ -->
		<?php
			while($linha = mysqli_fetch_array($consulta_dispositivos)) { 
				echo '<tr><td>'.$linha['nome_dispositivo'].'</td>';
				echo '<td>'.$linha['pino'].'</td>';
			
		?> 
				<td><a href="deleta_dispositivo.php?id_dispositivo=<?php echo $linha['id_dispositivo']; ?>&num_pino=<?php echo $linha['pino']; ?>">
					<span style="color: Tomato;">
						<i class="fas fa-trash-alt"></i>
					</span>
				</a></td></tr>
		<?php
			
			}
		?>
	</tbody>
	
</table>

<!--/* Precisamos permitir que a pessoa gerenciando possa selecionar qual curso e qual pessoa ela queira relacionar */-->
