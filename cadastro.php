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
    <link rel="stylesheet" href="style/cadastro.css">
    <title>Cadastrar Usuário</title>
</head>

<body>

    <div class="main">

        <div class="Card">
            <div class="Card-left">
                <img class="App-logo"  alt="Cadastro" />
            </div>
            <div class="Card-right">

                <div class="login-box">
                    <form action="php_actions/adicionarUsuario.php" method="POST">
                        <h2>Cadastro</h2>
                        <div class="user-box">
                            <input type="text" id="nome" name="nome" required>
                            <label htmlFor="name">Nome Completo</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="email" name="email" required>
                            <label htmlFor="name">Email</label>
                        </div>
                        <div class="user-box">
                            <input type="password" id="senha" name="senha" required>
                            <label htmlFor="name">Senha</label>
                        </div>

                        <button type="submit" name="btn-cadastrar" class="btn btn-outline-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>




</body>

</html>