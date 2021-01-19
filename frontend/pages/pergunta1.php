<?php 


$url = "http://localhost:81/backend/quiz.php";
$questoes = json_decode(file_get_contents($url));


print_r($questoes);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
 <div class="container-fluid">
        <header class="header-container">
            <a class="button-return" href="#" >
                <strong>X</strong>
            </a>
            <div class="questao-progresso">
                <h3>Questão 1/3</h3>
                <div id="progresso">
                    <div id="barra-progresso">

                    </div>
                </div>   
            </div>   

            <div class="moedas">
                <img src="../img/pedra-preciosa.png" alt="imagem-moeda">
            <span>018</span>
            </div>
        
        </header>

        <main class="conteudo-jogo">
            <div class="questao-jogo">
                <h1>Aonde guardar o seu dinheiro?</h1>
                <img src="../img/imagem-jogo1.png" alt="imagem-jogo">
            </div>
            
            <div class="resposta-jogo">
                <button>Poupança<a href=""></a></button>
                <button>Conta Corrente</button>
                <button>Corretora</button>
                <button>Bitcoin</button>
                <button type="submit">Enviar Resposta</button>
            </div>

            <footer class="container-footer">
                <div class="container-imagem">
                    <img src="../img/Home.png" alt="imagem-home">
                    <img src="../img/Card.png" alt="imagem-card">
                    <img src="../img/logo.png" alt="imagem-logo">
                    <img src="../img/direction.png" alt="imagem-direction">
                    <img src="../img/avatar.png" alt="imagem-avatar">
                </div>
            </footer>
        </main>
    </div>
</body>
</html>