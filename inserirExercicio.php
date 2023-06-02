<?php
include_once('components/navbar.php');
require_once('php_actions/db_connect.php');
$pdo = DbConnect::realizarConexao();
$stmt = $pdo->prepare("SELECT * FROM musculo");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    <title>Inserir Exercício</title>
</head>

<body>
    <div class="main">
        <form action="php_actions/create.php" method="POST">
            <p class="h2">Criar treino</p>

            <label for="nomeMusculo">Musculo do Exercicio</label>
            <select name="nomeMusculo" id="nomeMusculo" class="form-select">
                <?php
                foreach ($resultado as $row) {
                    echo "<option value=" . $row['nm_musculo'] . ">" . $row['nm_musculo'] . "</option>";
                }
                ?>
            </select>
            <div class="mb-3">
                <label for="nomeExercicio" class="form-label">Nome do Exercicio</label>
                <input type="text" class="form-control" id="nomeExercicio" name="nomeExercicio">
            </div>
            <div class="mb-3">
                <label for="qtSeries" class="form-label">Quantidade de Series</label>
                <input type="text" class="form-control" id="qtSeries" name="qtSeries">
            </div>
            <div class="mb-3">
                <label class="text" for="qtRepeticoes">Quantidade de Repetições</label>
                <input type="text" class="form-control" id="qtRepeticoes" name="qtRepeticoes">
            </div>
            <button type="submit" name="btn_enviar" class="btn btn-primary">Enviar</button>
            <button type="submit" name="btn_enviar" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>

</html>