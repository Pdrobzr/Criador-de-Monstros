<?php 
    require_once('db_connect.php');
    require_once('Treino.php');
    if(isset($_POST['btn-deletar'])){
        $id = $_POST['excluir'];
        $treino = new Treino();
        $treino->deletarExercicio($id);
        echo "<script>alert('Exercício deletado com sucesso!')</script>";
        echo "<script> window.location.href='http://localhost/pdo/Criador-de-Monstros/index.php'</script>";
        
    }
?>