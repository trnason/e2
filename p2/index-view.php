<!doctype html>
<html lang='en'>
<head><title>Project 2</title>
    <meta charset='utf-8'>
</head>
<body>
    <h1>Rock Paper Scissors Game</h1>
    <h2>Mechanics:</h2>

    <ul>

        <li>You choose either rock, paper, or scissors.</li>

        <li> The computer will then randomly choose either rock, paper, or scissors. </li>
       
        <li>It is a tie if both you and the computer choose the same thing.</li>
        
        <li>Otherwise, Rock beats Scissors, Scissors beats Paper, and Paper beats Rock.</li>

    </ul>
 
        <form method= 'GET' action='process.php'>
        <input type = 'radio' name = 'choice' value = 'rock' id ='rock' Checked ><label for='rock'>Rock</label>
        <input type = 'radio' name = 'choice' value = 'paper' id ='paper' ><label for='paper'>Paper</label>
        <input type = 'radio' name = 'choice' value = 'scissors' id ='scissors' ><label for='scissors'>Scissors</label>

<br>
<br>

    <button type ='submit'>Choose</button>



<h2>Results</h2>

<?php if($haveResults) 

{ ?>

<ul>
 
    <li> You chose: <?php echo $choice ?>
    <li> The computer chose: <?php echo $computerchoice ?>
    <li> Result: <?php echo $results ?>

</li>

</ul>

<?php } ?>

</body>
</html>
