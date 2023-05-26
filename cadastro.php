<?php
include_once('components/navbar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
require_once('php_actions/db_connect.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/inserir.css">
    <title>Cadastrar Usuário</title>
</head>

<body>
    <div class="d-flex">
        <form action="php_actions/adicionarUsuario.php" method="POST">   
            <div class="mb-3" style="margin-top: 60px;">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label class="text" for="qtRepeticoes">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" name="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
        </form>
</div>
</body>

</html>