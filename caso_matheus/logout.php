<?php

session_start();

#precisamos destruir a sessao login e usuario que foram criadas
unset($_SESSION['login']);
unset($_SESSION['usuario']);
#redicerionar pra pag de login, que eh nossa index
header('location:index.php');

#obs: nao aparecer mais o login na home quando ta logado