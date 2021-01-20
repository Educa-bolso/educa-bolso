<?php

require './conexao.php';

class Quiz {
  public static function getAllQuestions() {
    $connection = Connection::getDb();

    $stmt = $connection->query('SELECT * FROM quiz');
      
      $perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($perguntas as $key => $pergunta) {
        $perguntas[$key]['respostas'] = self::getRespostas($pergunta['id']);
      }
      
      return $perguntas;
  }

  public static function getRespostas($pergunta_id) {
    $connection = Connection::getDb();

    $stmt = $connection->query("
      SELECT * FROM respostas WHERE respostas.pergunta_id = '$pergunta_id'");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}