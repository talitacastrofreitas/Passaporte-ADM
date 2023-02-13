<?php

require 'conexao/connection.php';

if(isset($_SESSION['id'])&& !empty($_SESSION ['id'])){
    require_once 'Usuario.class.php';
    $u = new Usuario();
    $listLogged = $u->logged(($_SESSION['id']));

    $nomeUser=$listLogged['nome'];
}else{
    header("Location: login.php");
}