const numDeQuestoes = $('.questao').length;
const respostasCorretas = [];
let barraProgresso = 100 / numDeQuestoes;

$('#barra-progresso').css('width', '0%');

$('#questao_1').css('display', 'block');

function respostaEnviada(resposta, evento, idQuestao) {
  if (resposta) {
    $(`#${evento.id}`).addClass('correta');
    respostasCorretas.push(resposta);
  } else {
    $(`#${evento.id}`).addClass('errada');
  }

  setTimeout(() => {
    if (idQuestao < numDeQuestoes) {
      $(`#questao_${idQuestao}`).hide();

      $('#barra-progresso').css('width', `${barraProgresso * idQuestao}%`);

      $(`#questao_${++idQuestao}`).show();

      $('#numero-questao').html(idQuestao);
    } else {
      $(`#questao_${numDeQuestoes}`).hide();

      $('#barra-progresso').css('width', '100%');
      $('#numero-questao').html(numDeQuestoes);

      $('#final').show();
      $('#pontuacao-final').html(
        `Você acertou ${respostasCorretas.length} questões!`
      );
    }
  }, 1000);
}

$('#registrar-progresso').click(() => {
  window.location.href = `/frontend/cadastro-pontuacao.php?pontos=${String(
    respostasCorretas.length
  )}`;
});
