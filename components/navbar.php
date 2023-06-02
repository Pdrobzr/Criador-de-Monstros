<?php
  require_once('./php_actions/db_connect.php');
  session_start();
  
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<style>
  
</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Criador de Monstros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
  //  session_start();
//$_SESSION['logado'] = true;
   // if(isset($_SESSION['logado'])) { ?>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="inserirExercicio.php">Inserir Exercício</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visualizarTreinos.php">Visualizar Treinos</a>
        </li>
      </ul>
    </div>
    
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visualizarTreinos.php">Realizar Login</a>
        </li>
      </ul>
    </div>
   
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Criador de Monstros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if($_SESSION['logado'] == true) {
      $id = $_SESSION['id_usuario'];
      $pdo = DbConnect::realizarConexao();
      $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
      $stmt->execute(array($id));
      $dados = $stmt->fetch(PDO::FETCH_ASSOC);
    
      ?>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link" href="inserirExercicio.php">Inserir Exercício</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visualizarTreinos.php">Visualizar Treinos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$dados['nm_usuario']?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Conta</a></li>
            <li><a class="dropdown-item disabled" href="#">Configurações</a></li>
            <hr>
            <li><a class="dropdown-item" href="php_actions/logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
    <?php } else {?>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Realizar Login</a>
        </li>
      </ul>
    </div>
    <?php } ?>
  </div>
</nav>

        
</body>

</html>