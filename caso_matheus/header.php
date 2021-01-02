<!DOCTYPE html>
<html>
<head>
	<!--<title>Cursos PHP</title>-->
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
	
</head>

<body>
	<header> <!-- onde vai ficar nosso menu principal-->
		<div class="container">
			<a href="?pagina=home"><img src="img/home.png" title="Home" alt="Home"></a>
			<div id="menu">
				<a href="?pagina=cursos">Cursos</a> <!-- carregando a pag via get -->
				<a href="?pagina=alunos">Alunos</a>
				<a href="?pagina=matriculas">Matriculas</a>
				<a href="?pagina=quarto_painel">Painel</a>
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
