<?php
/* incluir novamente o bd pois essa eh uma pag pura */
include 'db.php';

if (!("" == trim($_POST['nome_dispositivo'])) && ($_POST['num_pino'] != 0)) {

	$nome_dispositivo = $_POST['nome_dispositivo'];
	$num_pino = $_POST['num_pino'];
	/* os campos name la do insere_curso.php que sao colocados aqui no post  */

	/*echo $nome_aluno;
	echo $data_nascimento;*/

	/* Var get recebe dados enviados pela URL, e a POST por formulário */
	$query = "INSERT INTO dispositivos(nome_dispositivo, pino) VALUES('$nome_dispositivo', $num_pino)";
	#$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES ('$id_aluno', '$id_curso')";
	/* varchar vao com apostrofos nos parametros */

	mysqli_query($conexao, $query);

	/* Alterando a gpio pra nao poder mais ser usada */
	$query = "UPDATE gpio SET em_uso = '1' WHERE gpio.numero = $num_pino";
	mysqli_query($conexao, $query);

	/* Agora queremos que redirecione pra pag de dispositivos */
}

header('location:index.php?pagina=dispositivos');
