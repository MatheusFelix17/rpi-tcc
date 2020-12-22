<h1 style="text-align:center"> Hello There! </h1>

<form method="post" action="login.php">

	<label  class="badge badge-secondary">Usuário</label>
	<input type="text" name="usuario" placeholder="Nome do Usuário"
	class="form-control">
	<br><br>
	<label  class="badge badge-secondary">Senha:</label> <!--label = nomezinho do lado do campo-->
	<input type="password" name="senha" placeholder="Digite a senha:" class=form-control>
	
	<br><br>
	
	<input type="submit" value="Entrar" class="btn btn-success">
	
</form>

<br>

<?php if (isset($_GET['erro'])) { ?>

	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválidos!
	</div>
	
<?php } ?>
