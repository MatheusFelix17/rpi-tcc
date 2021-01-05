<?php

$servidor = "localhost";
$senha = "matt1706";
$db = "domotics";
$user = "matheus";

$conexao = mysqli_connect($servidor, $user, $senha, $db);

$query = "SELECT * FROM gpio where em_uso = 0";
$consulta_gpio = mysqli_query($conexao, $query);

$query = "SELECT * FROM dispositivos";
$consulta_dispositivos = mysqli_query($conexao, $query);

#exibir o resultado na home
