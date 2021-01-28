<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dados_meteorologicos";


$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['temp']) && !empty($_POST['velocidade']) && !empty($_POST['direcao']) && !empty($_POST['umidade']) && !empty($_POST['pressao']) && !empty($_POST['telefone']) )
	{
		$temp = $_POST['temp'];
		$velocidade = $_POST['velocidade'];
		$direcao = $_POST['direcao'];
		$umidade = $_POST['umidade'];
		$pressao = $_POST['pressao'];
		$telefone = $_POST['telefone'];		

		$query = "INSERT INTO `alarmes` (temp, velocidade, umidade, pressao, direcao, telefone) VALUES ('$temp', '$velocidade', '$direcao', '$umidade', '$pressao', '$telefone')";

		$run = mysqli_query($conn, $query) or die(mysqli_error());

		if($run){
			echo "Tudo inserido com sucesso";
		}else{
			echo "Algo deu errado!";
		}

	}else{
		echo "all fields required";
	}
}


?>