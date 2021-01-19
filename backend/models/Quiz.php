<?php

require './conexao.php';

class Quiz {
  public static function getAllQuestions() {
    $connection = Connection::getDb();

    $stmt = $connection->query('SELECT * FROM quiz');

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}