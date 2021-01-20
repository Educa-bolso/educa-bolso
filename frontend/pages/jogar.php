<?php
  session_start();

  $id_usuario = $_SESSION['id'];
  $nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela jogo</title>

    <link rel="stylesheet" href="../styles/jogar.css" />
    <link rel="stylesheet" href="../styles/quiz.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid vh-100">
      <header class="">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" id="header-login-button" href="#"><img class="logo" src="../assets/img/logo7.png" alt=""></a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Quem somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nossa missão</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../sair.php">Sair</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <h2 id="titulo">Olá, <?= $nome ?></h2>

      <main class="content">
        <div class="image-content">
          <img src="../assets/img/image-player.svg" alt="Imagem de Jogo" />
          <h4><span>Fase 1: </span>Orçamento</h4>
        </div>

        <a href="quiz.php" class="player-button">JOGAR</a>
      </main>

       <footer class="container-footer">
        <div class="container-imagem">
          <a href="">
            <img src="../assets/img/Home.png" alt="imagem-home" />
          </a>
          <a href="">
            <img src="../assets/img/Card.png" alt="imagem-card" />
          </a>
          <a href="">
            <img src="../assets/img/logo.png" alt="imagem-logo" />
          </a>
          <a href="">
            <img src="../assets/img/direction.png" alt="imagem-direction" />
          </a>
          <a href="./tela-perfil.php">
            <img src="../assets/img/avatar.png" alt="imagem-avatar" />
          </a>
        </div>
      </footer>
    </div>
  </body>
</html>
