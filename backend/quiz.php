<?php 

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api //  //Indicação de arquivo JSON 
header("Content-type: application/json");

require './models/Quiz.php';

$quiz = Quiz::getAllQuestions();

print_r(json_encode($quiz));