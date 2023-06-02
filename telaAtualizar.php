<?php

include_once('components/navbar.php');
require_once('php_actions/db_connect.php');

if(!isset($_SESSION['logado'])){
    echo "<script>alert('É preciso estar logado para acessar essa página!')</script>";
    echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/login.php'</script>";
}

$id = $_SESSION['id_usuario'];
$pdo = DbConnect::realizarConexao();
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
$stmt->execute(array($id));
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/contaUsuario.css">

    <title>Atualizar Informações</title>
</head>

<body>
    <div class="main">

        <div class="title">
            <p class="h2">Atualizar Dados</p>
        </div>
        
        <form class="formulario" action="php_actions/atualizarUsuario.php" method="POST">
        <hr>
           
            <div class="mb-3">
                <label for="nomeExercicio" class="form-label">Nome</label>
                <input type="text" class="form-control " required id="nomeExercicio" name="nome" value=<?=$dados['nm_usuario']?>>
            </div>
            
            <div class="mb-3">
                <label for="nomeExercicio" class="form-label">Email</label>
                <input type="text" class="form-control" required id="nomeExercicio" name="email" value=<?=$dados['nm_email']?> >
            </div>
            <div class="mb-3">
                <label for="qtSeries" class="form-label">Senha</label>
                <input type="password" class="form-control" required id="qtSeries" name="senha" placeholder="Insira sua senha...">
            </div>
            <input type="hidden" name="id" value="<?=$id?>">
            <button type="submit" name="btn-atualizar" class="btn btn-warning">Alterar</button>
        </form>
    </div>

</body>

</html>