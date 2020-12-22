<!DOCTYPE html>
<html>
<head>
	<title>Cursos PHP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css"
</head>

<body>
	<header> <!-- onde vai ficar nosso menu principal-->
		<div class="container">
			<a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
				<a href="?pagina=cursos">Cursos</a> <!-- carregando a pag via get -->
				<a href="?pagina=alunos">Alunos</a>
				<a href="?pagina=matriculas">Matriculas</a>
				<!-- soh aparecer quando usuario tiver logado -->
				<?php if (isset($_SESSION['login'])){ ?>
					<a href="logout.php">
						<?php echo $_SESSION['usuario']; ?> 
						(sair)					
					</a>
				<?php } ?> 
			</div>
		</div>
	</header>
	
	<!-- uma div onde vai ficar o conteudo; ela abre no home e vai fechar no footer -->
	<div id="conteudo" class="container">
