<?php

$moves = ['rock', 'paper', 'scissors'];

$randomNumber = rand(0, 2);

$randomNumber1 = rand(0, 2);

$move1 = $moves[$randomNumber];

$move2 = $moves[$randomNumber1];

$Win = 'Wins!';
$Lose = 'Loses!';
$Tie = 'Ties!';

$results = " ";

if ($move1 == $move2) 

    {
         $results = $Tie;
    }

elseif ($move1 == 'rock' and $move2 == 'paper')

    {
        $results = $Lose;   
    }

elseif ($move1 == 'scissors' and $move2 == 'paper')

    {
        $results = $Win;
    }

elseif ($move1 == 'paper' and $move2 == 'scissors')

    {
        $results = $Lose;
    }
    
elseif ($move1 == 'paper' and $move2 == 'rock')

    {
        $results = $Win;
    }

elseif ($move1 == 'scissors' and $move2 == 'rock')

    {
        $results = $Lose;
    }

elseif ($move1 == 'rock' and $move2 == 'scissors')

    {
        $results = $Win;
    }


require 'index-view.php';

