<?php  
  include('../conexao.php');

  if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repetirSenha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repetirSenha = $_POST['repetirSenha'];

    $sql = "select email from usuarios where email = '$email'";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      echo "
        <script>
          alert('Este email já foi cadastrado!');   
        </script>";
       
    } else if ($senha !== $repetirSenha) {
      echo "<script>alert('As senhas não conferem.');
      window.location.href = 'cadastro.php';
      </script>";
    } else {
      $senhacripto = md5($senha);

      $sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', '$senhacripto')";

      $connection->query($sql);

      echo "<script>
      alert('Cadastro concluído!');
      window.location.href = 'index.php';
      </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>

<div class="container">
    <form action="" method="POST">
    <img id="icone" src="../assets/img/logo7.png" alt="logo">
    <a id="link" href="index.php">Login</a>
        <div class="form-group">
            <input class="form-control mb-4 mt-4"type="text" name="nome" placeholder="Nome" required="">
            <input class="form-control mb-4" type="email" name="email" placeholder="Email" required="">
            <input class="form-control mb-4" type="password" name="senha" placeholder="Senha" required="">
            <input class="form-control " type="password" name="repetirSenha" placeholder="Confirmar Senha" required="">
        </div>
    <button type="submit">Cadastrar</button>
  </form>
</div>
</body>
</html>