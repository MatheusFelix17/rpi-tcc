<?php

include 'db.php';

$id_dispositivo = $_GET['id_dispositivo'];
$num_pino = $_GET['num_pino'];

$query = "DELETE FROM dispositivos WHERE id_dispositivo = $id_dispositivo";

mysqli_query($conexao, $query);

$query = "UPDATE gpio SET em_uso = '0' WHERE gpio.numero = $num_pino";
mysqli_query($conexao, $query);

header('location:index.php?pagina=dispositivos');
