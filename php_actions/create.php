<?php 
    require_once('db_connect.php');
    require_once('Treino.php');

    if(isset($_POST['btn_enviar'])){
        $nomeMusculo = $_POST['nomeMusculo'];
        $nomeExercicio = $_POST['nomeExercicio'];
        $qtRepeticoes = $_POST['qtRepeticoes'];
        $qtSeries = $_POST['qtSeries'];
        $pdoTeste = new Treino();
        $pdoTeste->inserirNovoTreino($nomeMusculo, $nomeExercicio, $qtRepeticoes, $qtSeries);
        echo "<script>alert('Exercício adicionado com sucesso!')</script>";
        echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
    }
?>