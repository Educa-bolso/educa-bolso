<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <!--<link rel="stylesheet" type="text/css" href="./css/style.css">-->
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>

<div class="container">
    <form action="" method="POST">
    <img id="icone" src="./img/logo 7.png" alt="logo">
    <a id="link" href="index.php">Login</a>
        <div class="form-group">
            <input class="form-control mb-4 mt-4"type="text" name="nome" placeholder="Nome" required="">
            <input class="form-control mb-4" type="email" name="email" placeholder="Email" required="">
            <input class="form-control mb-4" type="password" name="senha" placeholder="Senha" required="">
            <input class="form-control " type="password" name="confirmarSenha" placeholder="Confirmar Senha" required="">
        </div>
    <button type="submit">Cadastrar</button>
  </form>
</div>
</body>
</html>