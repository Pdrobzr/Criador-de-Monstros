<?php
include_once('components/navbar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/visuTrei.css">
    <title>Visualizar Treinos</title>
</head>

<body>
    
        <form method="POST" action="exibirTreinos.php">
          
        <div class="formulario">
                <label for="musculo">Selecione o Treino</label>
                <select name="musculo" id="musculo" class="form-select">
                    <?php
                    require_once('php_actions/db_connect.php');

                    $pdo = DbConnect::realizarConexao();
                    $stmt = $pdo->prepare("SELECT * FROM musculo");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row) {
                        echo "<option value=" . $row['nm_musculo'] . ">" . $row['nm_musculo'] . "</option>";
                    }
                    ?>

                </select>
                <input type="submit" value="Buscar" name="btn-visualizar" class="btn btn-primary">
            </div>
  
        
        </form>

</body>

</html>