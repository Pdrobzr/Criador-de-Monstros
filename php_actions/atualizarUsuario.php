<?php 
    session_start();
    require_once('db_connect.php');
    require_once('Usuario.php');

    
    if(isset($_SESSION['logado']) && isset($_POST['btn-atualizar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $id = $_SESSION['id_usuario'];
        $senhaAtualizada = password_hash($senha, PASSWORD_DEFAULT);

        $atualizarUsuario = Usuario::atualizarUsuario($nome, $email, $senhaAtualizada, $id);
        if($atualizarUsuario){
            echo "<script>alert('Usuário atualizado com sucesso!')</script>";
            echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o usuario!')</script>";
            echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
        }
    }
?>