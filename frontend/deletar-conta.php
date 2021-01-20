<?php 
session_start();

include('conexao.php');

$id_usuario = $_SESSION['id'];

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  echo $id;

  $sql = "DELETE FROM usuarios WHERE id = $id_usuario";

  $connection->query($sql);

  echo "<script>window.location.href = './pages/index.php';</script>";
}