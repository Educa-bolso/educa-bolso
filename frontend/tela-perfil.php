<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  
    <title>Meu Perfil</title>
</head>

    <?php
        include('menu.html')
    ?>

<body>


    <section> 
          <div class="campo">
              <h1 id="titulo">Meu Perfil</h1>
              <br>
          </div>
    </section>

    <section>
        <form action="">
              <fieldset class="grupo">
                  <div class="campo">
                      <label for="nome"><strong>Nome</strong></label>
                      <input type="text" name="nome" id="nome">
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
                  <input type="email" name="email" id="email">
              </div>
              <div class="campo">
                  <label for="endereco"><strong>Endereço</strong></label>
                  <input type="text" name="endereço" id="endereço"> 
              </div>
              <div class="campo">
                  <label for="situaprof"><strong>Situação profissional:</strong></label>
                  <label for="sitprof1">
                    <input type="radio" name="sitprof1" value="Autônomo"> Autônomo
                  </label>
                  <label for="sitprof2">
                      <input type="radio" name="sitprof2" id="Assalariado"> Assalariado
                  </label>
                  <label for="sitprof3">
                      <input type="radio" name="sitprof3" id="Desempregado"> Desempregado
                  </label>
              </div>
              <div class="campo">
                <label for="salario"><strong>Faixa Salarial:</strong></label>
                <label for="salario1">
                  <input type="radio" name="salario1" value="salario"> Até 1 salário mínimo
                </label>
                <label for="salario2">
                    <input type="radio" name="salario2" id="1salario"> 1 salário mínimo
                </label>
                <label for="salario3">
                    <input type="radio" name="salario3" id="2salario"> 1 a 2 salários mínimo
                </label>
                <label for="salario4">
                    <input type="radio" name="salario4" id="3salario"> 2 a 3 sálarios mínimo
                </label>
                <label for="salario5">
                    <input type="radio" name="salario5" id="4salario"> Acima de 4 salários mínimo
                </label>
              </div>
              <div class="campo">
                <label for="escolaridade"><strong>Grau de escolaridade:</strong></label>
                <label for="escolarida1">
                  <input type="radio" name="escolaridade1" value="lêescreve"> Lê e escreve
                </label>
                <label for="escolarida2">
                    <input type="radio" name="escolaridade2" id="fundc"> Ensino fundamental incompleto
                </label>
                <label for="escolarida3">
                    <input type="radio" name="escolaridade3" id="fundi"> Ensino fundamental completo
                </label>
                <label for="escolarida4">
                    <input type="radio" name="escolaridade4" id="medioi"> Ensino médio incompleto
                </label>
                <label for="escolarida5">
                    <input type="radio" name="escolaridade5" id="medioc"> Ensino médio completo
                </label>
                <label for="escolarida6">
                    <input type="radio" name="escolaridade6" id="superiori"> Ensino superior incompleto
                </label>
                <label for="escolarida7">
                    <input type="radio" name="escolaridade7" id="superioric"> Ensino superior completo
                </label>
                <label for="escolarida8">
                    <input type="radio" name="escolaridade8" id="analfabeto"> Analfabeto
                </label>
              </div>
              <div class="campo">
                <label for="genero"><strong>Gênero:</strong></label>
                <label for="genero1">
                  <input type="radio" name="genero1" value="masc"> Masculino 
                </label>
                <label for="genero2">
                    <input type="radio" name="genero2" id="fem"> Feminino
                </label>
                <label for="genero3">
                    <input type="radio" name="genero3" id="masct"> Homem Transexual
                </label>
                <label for="genero4">
                    <input type="radio" name="genero4" id="femt"> Mulher Transexual
                </label>
                <label for="genero5">
                    <input type="radio" name="genero5" id="nb"> Não-binário
                </label>
                <label for="genero6">
                    <input type="radio" name="genero6" id="naodizer"> Prefiro não dizer
                </label>
              </div>
              <div class="campo">
                <label for="raca"><strong>Cor ou raça:</strong></label>
                <label for="raca1">
                  <input type="radio" name="raça1" value="preta"> Preta
                </label>
                <label for="raca2">
                    <input type="radio" name="raça2" id="parda"> Parda
                </label>
                <label for="raca3">
                    <input type="radio" name="raça3" id="indigena"> Indígena
                </label>
                <label for="raca4">
                    <input type="radio" name="raça4" id="amarela"> Amarela
                </label>
                <label for="raca5">
                    <input type="radio" name="raça5" id="branca"> Branca
                </label>
            </div>
           
            <button class="botao" type="submit">Enviar</button>

          </form>
    </section>      
   

</body>
</html>