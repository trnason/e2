<?php


session_start();

$choice = $_GET['choice'];

$moves = ['rock', 'paper','scissors'];
$computerchoice = $moves[rand(0, 2)];

$results = " ";
    
$Win = 'You Won!';
$Lose = 'You Lost!' ;
$Tie = 'It is a Tie!' ;
 






if ($choice == $computerchoice) {
    $results = $Tie;
} elseif ($choice == 'rock' and $computerchoice == 'paper') {
    $results = $Lose;
} elseif ($choice == 'scissors' and $computerchoice == 'paper') {
    $results = $Win;
} elseif ($choice == 'paper' and $computerchoice == 'scissors') {
    $results = $Lose;
} elseif ($choice == 'paper' and $computerchoice == 'rock') {
    $results = $Win;
} elseif ($choice == 'scissors' and $computerchoice == 'rock') {
    $results = $Lose;
} elseif ($choice == 'rock' and $computerchoice == 'scissors') {
    $results = $Win;
}

 
$_SESSION['results'] = [
    
    'choice' => $choice,
    'computerchoice' => $computerchoice,
    'results' => $results,

];

header('Location: index.php');