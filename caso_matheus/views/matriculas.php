<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a> <!-- link que vai apontar pra pag inserir nova matricula; se n tiver nada redireciona pra home -->
<table class="table table-hover table-striped" style="border:1px solid #ccc; width: 100%" id="matriculas">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Nome curso</th>
			<th>Deletar matricula</th>
		</tr>
	</thead>
	
	<tbody>
		<! --Varrer o resultado da conexao*/ -->
		<?php
			while($linha = mysqli_fetch_array($consulta_matriculas)) { 
				echo '<tr><td>'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
			
		?> 
				<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
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