<?php 
    require_once('db_connect.php');
    require_once('Usuario.php');

    if(isset($_POST['btn-cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

        $novoUsuario = Usuario::adicionarUsuario($nome, $email, $senhaSegura);

        if($novoUsuario){
            echo "<script>alert('Usuário cadastrado com sucesso!')</script>";
            echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
        } else {
            echo "<script>alert('Erro! Usuário já cadastrado!')</script>";
            echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
        }
    }
?>