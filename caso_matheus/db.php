<?php

$servidor = "localhost";
$senha = "matt1706";
$db = "domotics";
$user = "matheus";

$conexao = mysqli_connect($servidor, $user, $senha, $db);
/*if ($conexao)
	echo "conectou ao db<br>";
else
	echo "falha ao db!";*/

#carregar os cursos

$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $query);

/*if ($consulta_cursos == 1) {
	echo "consulta cursos<br>";
}
else
	echo "falhou consulta<br>";*/

$query = "SELECT * FROM alunos";
$consulta_alunos = mysqli_query($conexao, $query);

/*if ($consulta_alunos == 1) {
	echo "consulta alunos<br>";
}*/

$query = "SELECT alunos.nome_aluno, cursos.nome_curso FROM
	alunos, cursos, alunos_cursos
	WHERE alunos_cursos.id_aluno = alunos.id_aluno 
	and alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);

/*if ($consulta_matriculas == 1) {
	echo "consulta matriculas<br>";
}*/

#exibir o resultado na home
