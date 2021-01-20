<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
    <title>Educa Bolso</title>
</head>
<body>
    <?php
        include('menu.html')
    ?>
    <section>
        <div class="popup">
            <form action="../autenticar-usuario.php" method="POST">
                <img src="../assets/img/fechar.png" alt="Fechar" class="fechar">
                <a id="link" href="cadastro.php">Cadastre-se</a>
                <div class="form-group">
                    <input class="form-control mb-4 mt-4" type="email" name="email" placeholder="Digite seu Email" required="">
                    <input class="form-control" type="password" name="senha" placeholder="Digite sua Senha" required="">
                </div>
                <button id="btn" type="submit">Entrar</button><br>
                <div class="signup-link ">Esqueceu a sua senha? <a id="senha" href="#">Clique aqui</a></div>
            </form>
    </div>
    </section>

    <section>
        <div id="bloco1">
            <div class="container">
                <h3 id="text">Aprenda a administrar o seu dinheiro<br> de uma forma simples e divertida.</h3>
                <img id="img" src="../assets/img/trofeu-de-jogo.png" alt="Trofeu">
            </div>
        </div>
        <div id="bloco2">
            <div class="container">
                <h3 id="text">Utilizamos uma metodologia de ensino gameficada<br> com o objetivo trabalhar hábitos de educação financeira.</h3>
                <img id="img" src="../assets/img/icone2.png" alt="calculadora e moedas">
            </div>
        </div>
        <div id="bloco3">
            <div class="container">
                <h3 id="text">Ganhe ou perca moedas de acordo com<br> suas respostas e troque elas por benefícios.</h3>
                <img id="img" src="../assets/img/moeda.png" alt="moedas">
            </div>
        </div>
        <div>
            <div class="container">
                <img id="img2" src="../assets/img/grafico.png" alt="grafico">
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid" id="bloco4">
            <h4>EducaBolso</h4>
            <p> É uma plataforma que ensina educação financeira<br> 
                utilizando o método de aprendizado implícito com gameficação<br>
                assim trazendo um conteúdo personalizado  e de fácil entendimento.</p>
            <p>Contatos<br>educabolso1@gmail.com</p>  
        </div>
    </section>
    <div id="rodape">
        <p>&copy; 2021 Todos os direitos reservados.</p>
    </div>
</body>

<script>
    document.getElementById('botao').addEventListener("click", function() {
    document.querySelector('.popup').style.display = "flex";
    });
    
    document.querySelector('.fechar').addEventListener("click", function() {
    document.querySelector('.popup').style.display = "none";
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>