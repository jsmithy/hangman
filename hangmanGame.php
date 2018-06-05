<?php

require 'hangmanClass.php';
echo "\n";


$currentGuess = "";
$currentAttempt = 0;
$numOfTries = 6;
$wrongAnswers = 0;
$availibleLetters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$correctLetters = array("m", "o", "n", "n", "e", "y");


$attemptTest = new attempt(6);
$wordTest = "money";
echo $attemptTest . "\n";
echo implode(" ", $availibleLetters) . "\n";
$tiles = "money";

function showTiles($tiles)
{
    for ($i = 0; $i < strlen($tiles); $i++) {
        echo "_ ";
    }
    echo "\n";
}



function draw($wrongAnswers)
{
    echo "  __________" . "\n";
    echo "  | /      | " . "\n";
    echo $wrongAnswers > 0 ? "  |/       O" ."\n" : "  |/          " . "\n";
    switch ($wrongAnswers)
    {
        case 2: echo "  |        |" . "\n";
        break;
        case 3: echo "  |      --|" . "\n";
        break;
        case 4: echo "  |      --|--" . "\n";
        break;
        case 5: echo "  |      --|--" . "\n";
        break;
        default: echo "  |         " . "\n";
    }
        echo $wrongAnswers > 2 ? "  |        |" . "\n" : "  |         " . "\n";
    switch ($wrongAnswers)
    {
        case 5: echo "__|__     /   " . "\n";
        break;
        //case 6: echo "__|__     /  \ " . "\n";
        //break;

    }
    echo "__|__     " . "\n";
}

//    __________
//    | /      |
//    |/       O
//    |      --|--
//    |        |

//  __|__     / \ "

for ($i = $currentAttempt; $i < $numOfTries; $i++)
{
    $currentAttempt = $currentAttempt + 1;
    echo "Current attempt: " . $currentAttempt . "\n";


showTiles($tiles);
draw($wrongAnswers);


    echo "\n";
    echo "Pick a letter: ";
    $askLetter = trim(fgets(STDIN));


    $currentGuess = $currentGuess . $askLetter;
    echo $currentGuess . "\n";



    //letters available
    if ( in_array($askLetter, $availibleLetters))
    {
        unset($availibleLetters[array_search($askLetter, $availibleLetters)]);
        echo implode(" ", $availibleLetters) . "\n";
    }

    //correct and incorrect letters
    if(!in_array($askLetter, $correctLetters)) {
        echo "XXXXX" . "\n";
        $wrongAnswers = $wrongAnswers + 1;
    }
    else
    {
        echo "✓✓✓✓✓" . "\n";

    }

    removeTiles($tiles, $correctLetters, $askLetter);
    echo "\n";
    echo "\n";



    if ($currentGuess === $wordTest)
    {
        echo "\n";
        echo "CONGRATS YOU WIN" . "\n";
        die();
    }

}



if ($currentAttempt = 6)
{
    $endGame = new hangman6(1);
    echo $endGame;
    echo "YOU LOSE" . "\n";
    echo "GAME OVER" . "\n";

}


function removeTiles($tiles, $correctLetters, $askLetter)
{
    if ($askLetter == $correctLetters[0]) {
        echo "m ";
        for ($i = 1; $i < strlen($tiles); $i++) {
            echo "_ ";
        }
    }
    if ($askLetter == $correctLetters[1]) {
        echo "_ o ";
        for ($i = 2; $i < strlen($tiles); $i++) {
            echo "_ ";
        }
    }
    if ($askLetter == $correctLetters[2]) {
        echo "_ _ n ";
        for ($i = 3; $i < strlen($tiles); $i++) {
            echo "_ ";
        }
    }
    if ($askLetter == $correctLetters[3]) {
        echo "_ _ _ e ";
        for ($i = 4; $i < strlen($tiles); $i++) {
            echo "_ ";
        }
    }
    if ($askLetter == $correctLetters[4]) {
        echo " _ _ _ _ y";
        for ($i = 5; $i < strlen($tiles); $i++) {
            echo "_ ";
        }
    }
}

















//bugs and other things
// word has to be entered in order
// can only be "money"          shuffle array("money", "shark", "chaos", "coin", "grain", "nursery", "error", "slippery", "juice", "evil");








//unused
//if ($wrongAnswers == 0)
//    {
//        $startGame = new hangman7(1);
//        echo $startGame;
//    }
//
//
//    if ($wrongAnswers == 1)
//    {
//        $addHead = new hangman1(1);
//        echo $addHead . "\n";
//    }
//
//    if ($wrongAnswers == 2)
//    {
//        $addBody = new hangman2(1);
//        echo $addBody . "\n";
//    }
//
//    if ($wrongAnswers == 3)
//{
//    $addArm1 = new hangman3(1);
//    echo $addArm1 . "\n";
//}
//
//    if ($wrongAnswers == 4)
//    {
//        $addArm2 = new hangman4(1);
//        echo $addArm2 . "\n";
//    }
//
//    if ($wrongAnswers == 5)
//    {
//        $addLeg = new hangman5(1);
//        echo $addLeg . "\n";
//    }


// $split = str_split($availibleLetters);

//  if (in_array($askLetter, $split))
{
    //      echo $askLetter . " has been used" . "\n";
    //    echo "\n";
    //  echo "\n";
    //echo "\n";
}
