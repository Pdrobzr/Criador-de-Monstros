<?php
include_once('components/navbar.php');

?>
<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/contaUsuario.css">

    <title>Inserir Exercício</title>
</head>

<body>
    <div class="main">

        <div class="title">
            <p class="h2">Conta  Usuário</p>
        </div>
        
        <form class="formulario">
        <hr>

           
            <div class="mb-3">
                <label for="nomeExercicio" class="form-label">Nome</label>
                <input type="text" class="form-control " disabled id="nomeExercicio" name="nomeExercicio" placeholder="Pedro Bezerra">
            </div>
            
            <div class="mb-3">
                <label for="nomeExercicio" class="form-label">Email</label>
                <input type="text" class="form-control" id="nomeExercicio" disabled name="nomeExercicio" placeholder="psil@gmail.com" >
            </div>
            <div class="mb-3">
                <label for="qtSeries" class="form-label">Senha</label>
                <input type="password" class="form-control" id="qtSeries" name="qtSeries" disabled placeholder="****">
            </div>
            
            <button type="submit" name="btn_enviar" class="btn btn-danger">Deletar conta</button>
            <button type="submit" name="btn_enviar" class="btn btn-warning">Alterar</button>
        </form>
    </div>

</body>

</html>