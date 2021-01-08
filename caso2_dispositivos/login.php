<?php

include 'db.php';
$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);	#addslashes para seguranca

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' and 
SENHA = '$senha'";
#md5 antes ou depois, para seguranca extra na senha
$consulta = mysqli_query($conexao, $query);

# consulta no banco e detectar se existe o user e senha, e se os valores batem
# eh esperado que haja 1 resultado apenas

if (mysqli_num_rows($consulta) == 1) {
	#se o login der certo, vamos redirecionar pra Home!
	#echo 'Login feito com sucesso!';
	session_start();	#funcao que inicia nossa sessao
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	
	#criar uma sessao para verificar se o user esta logado ou nao,
	#para a hora que redirecionar para home
	$_SESSION['login'] = true;	#que vai ser utilizado no index para validar qual pagina em que esta
	header('location:index.php');
}
else {
	#echo 'User e/ou senha inválido!';
	header('location:index.php?erro');
}
