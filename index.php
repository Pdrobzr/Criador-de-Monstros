<?php
    include_once('components/navbar.php');
?>

<head>
    <title>Página Inicial</title>
</head>
<style>
  .carousel-item {
  height: 80vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>



<header>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('imagens/gym1.jpg')">
        <div class="carousel-caption">
         
          <p></p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('imagens/gym2.jpg')">
        <div class="carousel-caption">
          
          <p></p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('imagens/gym3.jpg')">
        <div class="carousel-caption">
          
          <p></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="fw-light">Vire monstro!</h1>
    <p class="lead">Seja Bem Vindo(a) A Make Monsters aqui você ira conseguir controlar o seu treino da molher maneira!</p>
  </div>
</section>