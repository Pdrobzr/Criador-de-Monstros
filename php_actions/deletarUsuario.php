<?php

session_start();
require_once('db_connect.php');
require_once('Usuario.php');

if(!isset($_SESSION['logado'])){
    echo "<script>alert('É preciso estar logado para acessar essa página!')</script>";
    echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/login.php'</script>";
}

$id = $_SESSION['id_usuario'];
$deletarUsuario = Usuario::deletarUsuario($id);

if($deletarUsuario){
    session_unset();
    session_destroy();
    echo "<script>alert('Deletado com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/login.php'</script>";
} else {
    echo "<script>alert('Erro ao deletar!')</script>";
    echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/contaUsuario.php'</script>";
}
?>