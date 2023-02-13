<?php
session_start();

$localhost="localhost";
$user="root";
$password="";
$banco="system_db";

global $pdo;

try{
    //Conexão orientada a objetos com PDO
    //Criando conexão com o banco de dados
    $pdo = new PDO("mysql:dbname=".$banco.";  host=".$localhost, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}



?>