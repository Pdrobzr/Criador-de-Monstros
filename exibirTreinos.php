<?php
error_reporting(0);
include_once('components/navbar.php');
require_once('php_actions/db_connect.php');
$pdo = DbConnect::realizarConexao();
if (isset($_POST['btn-visualizar'])) {
    $musculo = $_POST['musculo'];
    $stmt = $pdo->prepare("SELECT * FROM exercicio WHERE nm_musculo = ?");
    $stmt->execute(array($musculo));
    if($stmt->rowCount() > 0){
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "<script>alert('Treino vazio, adicione exercicios para esse musculo!')</script>";
        echo "<script> window.location.href='http://localhost/pdo/index.php'</script>";
    }
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Treinos</title>
</head>

<body>
    <table class="table">
        <tr>
            <th scope="col">Nome do Exercicio</th>
            <th scope="col">Quantidade de Series</th>
            <th scope="col">Quantidade de Repetições</th>
        </tr>
        <?php
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<td>" . $row['nm_exercicio'] . "</td>";
            echo "<td>" . $row['qt_series'] . "</td>";
            echo "<td>" . $row['qt_repeticoes'] . "</td>";
            echo "<td>";
        ?>
            <form action="php_actions/deletarExercicio.php" method="POST">
                <?php
                echo "<input type='hidden' name='excluir' value=" . $row['id_exercicio'] . "/>";
                echo "<button type='submit' name='btn-deletar'>Deletar</button>";
                ?>
            </form>
            </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>