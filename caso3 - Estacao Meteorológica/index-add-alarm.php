<?php

# iniciar sessao
// session_start();	# a mesma sessao criada no login vai ser mantida aqui

# Base de dados
// include 'db.php';
# Cabecalho
include 'header.php';
# Conteudo da pagina

// # primeiro avaliar se ha uma session (login)
// if (isset($_SESSION['login'])) {
// 	if (isset($_GET['pagina'])) {
// 		$pagina = $_GET['pagina'];
// 	}
// 	else {
// 		$pagina = 'home';	#se existe ja manda direto pra Home
// 	}
// }

// else {
// $pagina='home'; #redireciona pra home
// }

// switch($pagina) {
	// case 'quarto_painel': include 'views/quarto_painel.php'; break;
	// case 'dispositivos': include 'views/dispositivos.php'; break;
	// case 'inserir_dispositivo': include 'views/inserir_dispositivo.php'; break;
	// default: include 'views/home.php'; break;
// }


include 'add_alarm.php';


/*#$pagina = $_GET['pagina'];	#pegando o conteudo da pagina */

# Footer - rodape
include 'footer.php';
