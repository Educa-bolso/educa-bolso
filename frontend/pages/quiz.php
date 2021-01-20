<?php 

session_start();

include('../conexao.php');

$id_usuario = $_SESSION['id'];

$url = "http://localhost:81/backend/quiz.php";
$questoes = json_decode(file_get_contents($url));

$sql = "select * from pontuacao where usuario_id = $id_usuario";

$results = $connection->query($sql);

$pontuacao = mysqli_fetch_assoc($results);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perguntas</title>
    <link rel="stylesheet" href="../styles/quiz.css" />
    <link rel="stylesheet" href="../styles/global.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <header class="header-container">
        <a class="button-return" href="./jogar.php">
          <strong>X</strong>
        </a>

        <div class="questao-progresso">
          <h3>
            Questão <span id="numero-questao">1</span>/<?= count($questoes); ?>
          </h3>
          <div id="progresso">
            <div id="barra-progresso"></div>
          </div>
        </div>

        <div class="moedas">
          <img src="../assets/img/pedra-preciosa.png" alt="imagem-moeda" />
            <?php if ($results->num_rows > 0): ?>

            <span><?= $pontuacao['pontos'] ?></span>

            <?php else: ?>

            <span>0</span>

            <?php endif ?>
        </div>
      </header>

      <main class="conteudo-jogo">
        <?php
                foreach ($questoes as $key =>
        $questao) { ?>

        <div class="questao" id="questao_<?= $questao->id ?>">
          <div class="questao-jogo">
            <h1><?= $questao->pergunta?></h1>
          </div>

          <div class="resposta-jogo">
            <?php 
                        foreach ($questao->respostas as $key => $resposta) { ?>
            <button
              id="resposta<?= $questao->id . $resposta->id ?>"
              onclick="respostaEnviada(<?= $resposta->correta ?>, this, <?=$questao->id ?>)"
            >
              <?= $resposta->resposta ?>
            </button>
            <?php 
                    }
                ?>
          </div>
        </div>

        <?php 
                }    
                ?>

        <div id="final" style="display: none">
          <span id="pontuacao-final"></span>
          <button id="registrar-progresso">Voltar</button>
        </div>
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

    <script src="../scripts/index.js"></script>
  </body>
</html>
