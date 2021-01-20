<?php 
session_start();

include('conexao.php');

$id_usuario = $_SESSION['id'];

if (isset($_GET['pontos'])) {
  $pontos = $_GET['pontos'];

  $sql = "insert into pontuacao (pontos, usuario_id) values ($pontos, $id_usuario)";

  $connection->query($sql);

  echo "<script>window.location.href = './pages/jogar.php';</script>";
}

