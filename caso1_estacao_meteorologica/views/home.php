<h1 style="text-align:center"> Bem-vindo! </h1>

<title>Home</title>

<?php if (!isset($_SESSION['login'])){ ?> <!-- se tiver logado nao aparece de novo a pag de login -->
	<form method="post" action="login.php">

		<label class="badge bg-secondary">Usuário</label><br>
		<input type="text" name="usuario" placeholder="Nome do Usuário"
		class="form-control">
		<br><br>
		<label class="badge bg-secondary">Senha:</label> <!--label = nomezinho do lado do campo-->
		<input type="password" name="senha" placeholder="Digite a senha:" class=form-control>
		
		<br><br>
		
		<input type="submit" value="Entrar" class="btn btn-success">
		
	</form>
<?php } ?> 


<?php if (isset($_GET['erro'])) { ?>

	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválidos!
	</div>
	
<?php } ?>
