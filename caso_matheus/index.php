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



#$pagina = $_GET['pagina'];	#pegando o conteudo da pagina
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

else {
	include 'views/home.php';
}
# Footer - rodape
include 'footer.php';
