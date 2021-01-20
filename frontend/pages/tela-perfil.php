<?php
  session_start();

  $id_usuario = $_SESSION['id'];
  $nome = $_SESSION['nome'];
  $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/tela-perfil.css">
    <link rel="stylesheet" href="../styles/jogar.css" />
    <link rel="stylesheet" href="../styles/global.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <title>Meu Perfil</title>
</head>

   

<body>
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
                <a class="nav-link" href="./jogar.php">Voltar</a>
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

    <section> 
          <div class="campo">
              <h1 id="titulo">Meu Perfil</h1>
              <br>
          </div>
    </section>

    <section class="conteudo-perfil">
        <form action="../cadastro-perfil.php" method="POST">
              <fieldset class="grupo">
                  <div class="campo">
                      <label for="nome"><strong>Nome</strong></label>
                      <input type="text" name="nome" value="<?= $nome ?>" id="nome">
                  </div>

                  <div class="campo">
                      <label for="sobrenome"><strong>Sobrenome</strong></label>
                      <input type="text" name="sobrenome" id="sobrenome">
                  </div>
              </fieldset>
              <div class="campo">
                <strong>Data de nascimento: </strong>
                <input type="date" name="nascimento">
              </div>
              <div class="campo">              
                  <label for="email"><strong>Email:</strong></label>
                  <input type="email" name="email" value="<?= $email ?>" id="email">
              </div>
              <div class="campo">
                  <label for="endereco"><strong>Endereço</strong></label>
                  <input type="text" name="endereco" id="endereco"> 
              </div>
              <div class="campo">
                  <label for="situaprof"><strong>Situação profissional:</strong></label>
                  <label for="sitprof1">
                    <input type="radio" name="situacao_profissional" value="autonomo"> Autônomo
                  </label>
                  <label for="sitprof2">
                      <input type="radio" name="situacao_profissional" value="assalariado" id="Assalariado"> Assalariado
                  </label>
                  <label for="sitprof3">
                      <input type="radio" name="situacao_profissional" value="desempregado" id="Desempregado"> Desempregado
                  </label>
              </div>
              <div class="campo">
                <label for="salario"><strong>Faixa Salarial:</strong></label>
                <label for="salario1">
                  <input type="radio" name="salario" value="-1sm"> Até 1 salário mínimo
                </label>
                <label for="salario2">
                    <input type="radio" name="salario" value="1sm" id="salario2"> 1 salário mínimo
                </label>
                <label for="salario3">
                    <input type="radio" name="salario" value="1a2sm" id="salario3"> 1 a 2 salários mínimo
                </label>
                <label for="salario4">
                    <input type="radio" name="salario" value="2a3sm" id="salario4"> 2 a 3 sálarios mínimo
                </label>
                <label for="salario5">
                    <input type="radio" name="salario" value="+4sm" id="salario5"> Acima de 4 salários mínimo
                </label>
              </div>
              <div class="campo">
                <label for="escolaridade"><strong>Grau de escolaridade:</strong></label>
                <label for="escolarida1">
                  <input type="radio" name="escolaridade" value="leescreve"> Lê e escreve
                </label>
                <label for="escolarida2">
                    <input type="radio" name="escolaridade" value="EFI" id="fundc"> Ensino fundamental incompleto
                </label>
                <label for="escolarida3">
                    <input type="radio" name="escolaridade" value="EFC" id="fundi"> Ensino fundamental completo
                </label>
                <label for="escolarida4">
                    <input type="radio" name="escolaridade" value="EMI" id="medioi"> Ensino médio incompleto
                </label>
                <label for="escolarida5">
                    <input type="radio" name="escolaridade" value="EMC" id="medioc"> Ensino médio completo
                </label>
                <label for="escolarida6">
                    <input type="radio" name="escolaridade" value="ESI" id="superiori"> Ensino superior incompleto
                </label>
                <label for="escolarida7">
                    <input type="radio" name="escolaridade" value="ESC" id="superioric"> Ensino superior completo
                </label>
                <label for="escolarida8">
                    <input type="radio" name="escolaridade" value="analfabeto" id="analfabeto"> Analfabeto
                </label>
              </div>
              <div class="campo">
                <label for="genero"><strong>Gênero:</strong></label>
                <label for="genero1">
                  <input type="radio" name="genero" value="masc"> Masculino 
                </label>
                <label for="genero2">
                    <input type="radio" name="genero" value="fem" id="fem"> Feminino
                </label>
                <label for="genero3">
                    <input type="radio" name="genero" value="masct" id="masct"> Homem Transexual
                </label>
                <label for="genero4">
                    <input type="radio" name="genero" value="femt" id="femt"> Mulher Transexual
                </label>
                <label for="genero5">
                    <input type="radio" name="genero" value="nb" id="nb"> Não-binário
                </label>
                <label for="genero6">
                    <input type="radio" name="genero" value="naodizer" id="naodizer"> Prefiro não dizer
                </label>
              </div>
              <div class="campo">
                <label for="raca"><strong>Cor ou raça:</strong></label>
                <label for="raca1">
                  <input type="radio" name="raca" value="preta"> Preta
                </label>
                <label for="raca2">
                    <input type="radio" name="raca" value="parda"id="parda"> Parda
                </label>
                <label for="raca3">
                    <input type="radio" name="raca" value="indigena" id="indigena"> Indígena
                </label>
                <label for="raca4">
                    <input type="radio" name="raca" value="amarela" id="amarela"> Amarela
                </label>
                <label for="raca5">
                    <input type="radio" name="raca" value="branca" id="branca"> Branca
                </label>
            </div>
           
            <button class="botao" type="submit">Enviar</button>

          </form>

          <form class="form-delete" action="../deletar-conta.php" method="post">
            <input type="hidden" name="id" value="<?= $id_usuario ?>">
            <button class="btn btn-danger mx-auto mt-5" type="submit">Deletar minha conta</button>
          </form>
    </section>      
</body>
</html>