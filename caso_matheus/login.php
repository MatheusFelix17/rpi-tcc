<?php

include 'db.php';
$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);	#addslashes pra seguranca

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' and 
SENHA = '$senha'";
#md5 antes ou depois, pra seguranca na senha
$consulta = mysqli_query($conexao, $query);
# consulta no banco e detectar se existe o user e senha se batem
# eh esperado que haja 1 resultado soh

if (mysqli_num_rows($consulta) == 1) {
	#se o login der certo, vamos redirecionar pra Home!
	#echo 'Login feito com sucesso!';
	session_start();	#funcao que starta nossa sessao
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	
	#criar uma secao pra verificar se o user ta logado ou nao,
	#pra hora que redirecionar pra home
	$_SESSION['login'] = true;	#que vai ser utilziado no index pra validar qual pag que ta
	header('location:index.php');
}
else {
	#echo 'User e/ou senha inválido!';
	header('location:index.php?erro');
}