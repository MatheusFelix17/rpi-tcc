<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a> <!-- link que vai apontar pra pag inserir novo curso; se n tiver nada redireciona pra home -->
<table class="table table-hover table-striped" style="border:1px solid #ccc; width: 100%" id="cursos">
	<thead>
		<tr>
			<th>Nome curso</th>
			<th>Carga horaria</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	
	<tbody>
		<! --varrer o resultado da conexao -->
		<?php
			while($linha = mysqli_fetch_array($consulta_cursos)) { 
				echo '<tr><td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['carga_horaria'].'</td>';
		?> 
			<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
				<i class="far fa-edit"></i>
			</a></td>
			<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
				<i class="fas fa-trash-alt"></i>
			</a></td></tr>
		<?php
			}
		?>
	</tbody>
</table>