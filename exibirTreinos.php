<?php
error_reporting(0);
include_once('components/navbar.php');
require_once('php_actions/db_connect.php');
$pdo = DbConnect::realizarConexao();
if (isset($_POST['btn-visualizar'])) {
    $musculo = $_POST['musculo'];
    $stmt = $pdo->prepare("SELECT * FROM exercicio WHERE nm_musculo = ?");
    $stmt->execute(array($musculo));
    if ($stmt->rowCount() > 0) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "<script>alert('Treino vazio, adicione exercicios para esse musculo!')</script>";
        echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
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
    <link rel="stylesheet" href="visuTreinos.css">
</head>

<body>
    
    <div style="margin-top:150px;">
        
        <div class="container">
       
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Exercicio</th>
                        <th scope="col">Séries</th>
                        <th scope="col">Repetições</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>


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
                            echo "<button type='submit' class='btn btn-danger' name='btn-deletar'>Deletar</button>";
                            ?>
                        </form>
                        </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>
                    
    </div>
   
</body>

</html>