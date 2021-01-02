<?php

# iniciar sessao
session_start();	# a mesma sessao criada no login vai ser mantida aqui

# Base de dados
include 'db.php';
# Cabecalho
include 'header.php';
# Conteudo da pagina

# primeiro avaliar se ha uma session (login)
if (isset($_SESSION['login'])) {
	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}
	else {
		$pagina = 'cursos';	#se existe ja manda direto pra cursos
	}
}

else {
	$pagina='home'; #redireciona pra home
}

switch($pagina) {
	case 'cursos': include 'views/cursos.php'; break;
	case 'alunos': include 'views/alunos.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;	
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	case 'inserir_curso': include 'views/inserir_curso.php'; break;
	case 'quarto_painel': include 'views/quarto_painel.php'; break;
	case 'exemplo_inspiracao': include 'views/exemplo_inspiracao.php'; break;
	default: include 'views/home.php'; break;
}

/*#$pagina = $_GET['pagina'];	#pegando o conteudo da pagina
if ($pagina == 'cursos') {
	include 'views/cursos.php';
}
elseif ($pagina == 'alunos') {
	include 'views/alunos.php';
}

elseif ($pagina == 'matriculas') {
	include 'views/matriculas.php';
}

elseif ($pagina == 'inserir_curso') {
	include 'views/inserir_curso.php';
}

elseif ($pagina == 'quarto_painel') {
	include 'views/quarto_painel.php';
}

elseif ($pagina == 'inserir_aluno') {
	include 'views/inserir_aluno.php';
}

elseif ($pagina == 'inserir_matricula') {
	include 'views/inserir_matricula.php';
}

else {
	include 'views/home.php';
}*/

# Footer - rodape
include 'footer.php';
