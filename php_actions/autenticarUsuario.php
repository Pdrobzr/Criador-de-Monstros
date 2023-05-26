<?php 
    require_once('db_connect.php');
    require_once('Usuario.php');

    if(isset($_POST['btn-entrar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $autenticar = Usuario::autenticarUsuario($email, $senha);

        if($autenticar){
            session_start();
            $_SESSION['id_usuario'] = $dados['id_usuario'];
            $_SESSION['logado'] = true;
            echo "<script> alert('Login efetuado com sucesso!')</script>";
            echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
        } else {
            //echo "<script>alert('Email ou Senha invalidos!')</script>";
            //echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/login.php'</script>";
        }

    }
?>