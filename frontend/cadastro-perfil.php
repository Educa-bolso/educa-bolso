<?php  

  session_start();

  $id_usuario = $_SESSION['id'];

  include('conexao.php');

  if (isset($_POST['nome']) && 
    isset($_POST['sobrenome']) && 
    isset($_POST['email']) && 
    isset($_POST['raca']) &&
    isset($_POST['genero']) &&
    isset($_POST['nascimento']) && 
    isset($_POST['endereco']) && 
    isset($_POST['escolaridade']) &&
    isset($_POST['situacao_profissional']) && 
    isset($_POST['salario']) 
    
    )
    {

    $nome = $_POST['nome'];
    $sobrenome =$_POST['sobrenome']; 
    $email = $_POST['email']; 
    $raca = $_POST['raca']; 
    $genero = $_POST['genero']; 
    $nascimento = $_POST['nascimento']; 
    $endereco = $_POST['endereco']; 
    $escolaridade = $_POST['escolaridade'];
    $situacao_profissional = $_POST['situacao_profissional']; 
    $salario = $_POST['salario'];

    $sql = "insert into perfil (nome, sobrenome, email, raca, genero, nascimento, endereco, escolaridade, situacao_profissional, salario, id_usuario ) values ('$nome', '$sobrenome', '$email', '$raca', '$genero', '$nascimento', '$endereco', '$escolaridade', '$situacao_profissional', '$salario', '$id_usuario')";
    
    $connection->query($sql);

    echo "<script>window.location.href = './pages/jogar.php';</script>";
  }
?>