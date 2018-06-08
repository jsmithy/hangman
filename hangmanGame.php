<?php

require 'hangmanClass.php';


echo "\n";
//not added
$wordList = array("money", "chaos", "grain", "error", "juice");
shuffle($wordList);
//$wordTest = "money";


function playHangman()
{
//variables
    $currentGuess = "";
    $currentAttempt = 0;
    $numOfTries = 26;
    $wrongAnswers = 0;
    $availibleLetters = array(
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z"
    );
    $correctLetters = array("j", "u", "i", "c", "e");
//$correctLetters2 =
    $lives = 6;
    $lines = "_ _ _ _ _" . "\n";

//test variables
    $replace1 = array(0 => "j");
    $replace2 = array(1 => "u");
    $replace3 = array(2 => "i");
    $replace4 = array(3 => "c");
    $replace5 = array(4 => "e");


//more variables

    $attemptTest = new attempt(6);

    echo $attemptTest . "\n";
    echo "Available Letters: " . implode(" ", $availibleLetters) . "\n";
    $tiles = array();

    echo implode(" ", $tiles);

    if (!function_exists('showLives')) {
        function showLives($lives)
        {
            for ($i = 0; $i < $lives; $i++) {
                echo "❤️ ";
            }
        }
    }
    if (!function_exists('draw')) {
        function draw($wrongAnswers)
        {
            echo "  __________" . "\n";
            echo "  | /      | " . "\n";
            echo $wrongAnswers > 0 ? "  |/       O" . "\n" : "  |/          " . "\n";
            switch ($wrongAnswers) {
                case 2:
                    echo "  |        |" . "\n";
                    break;
                case 3:
                    echo "  |      --|" . "\n";
                    break;
                case 4:
                    echo "  |      --|--" . "\n";
                    break;
                case 5:
                    echo "  |      --|--" . "\n";
                    break;
                default:
                    echo "  |         " . "\n";
            }
            echo $wrongAnswers > 2 ? "  |        |" . "\n" : "  |         " . "\n";
            switch ($wrongAnswers) {
                case 5:
                    echo "__|__     /   " . "\n";
                    break;
                case 6:
                    echo "__|__     /  \ " . "\n";
                    break;
                default:
                    echo "__|__        " . "\n";
            }
        }
    }

    if (!function_exists('removeTiles')) {
        function removeTiles($askLetter, $correctLetters, $tiles, $replace1, $replace2, $replace3, $replace4, $replace5)
        {
            if ($askLetter == $correctLetters[0]) {
                $newWord = array_replace($tiles, $replace1);
                echo implode(" ", $newWord) . "\n";
            }
            if ($askLetter == $correctLetters[1]) {
                $newWord = array_replace($tiles, $replace2);
                echo implode(" ", $newWord) . "\n";
            }
            if ($askLetter == $correctLetters[2]) {
                $newWord = array_replace($tiles, $replace3);
                echo implode(" ", $newWord) . "\n";
            }
            if ($askLetter == $correctLetters[3]) {
                $newWord = array_replace($tiles, $replace4);
                echo implode(" ", $newWord) . "\n";
            }
            if ($askLetter == $correctLetters[4]) {
                $newWord = array_replace($tiles, $replace5);
                echo implode(" ", $newWord) . "\n";
            }
        }
    }





    for ($i = 0; $i < count($correctLetters); $i++) {
        array_push($tiles, "_");
    }


    for ($i = $currentAttempt; $i < $numOfTries; $i++) {
        $currentAttempt = $currentAttempt + 1;
        echo "Current attempt: " . $currentAttempt . "\n";
        echo "Lifes Left: ";

        showLives($lives);
        echo "\n";
        echo $lines;
        echo "\n";

        draw($wrongAnswers);


        echo "\n";
        echo "Pick a letter: ";
        $askLetter = trim(fgets(STDIN));
        //$currentGuess = $currentGuess . $askLetter;
        //echo $currentGuess . "\n";
        removeTiles($askLetter, $correctLetters, $tiles, $replace1, $replace2, $replace3, $replace4, $replace5);

        //correct and incorrect letters
        if (!in_array($askLetter, $correctLetters)) {
            echo "XXXXX" . "\n";
            $wrongAnswers = $wrongAnswers + 1;
            $lives = $lives - 1;
            echo "\n";
        } else {
            $currentGuess = $currentGuess . $askLetter;
            //echo $currentGuess . "\n";
            echo "✓✓✓✓✓" . "\n";
            echo "\n";


        }


        //letters available
        if (in_array($askLetter, $availibleLetters)) {
            unset($availibleLetters[array_search($askLetter, $availibleLetters)]);
            echo "Available Letters: " . implode(" ", $availibleLetters) . "\n";
        }


        echo "\n";
        echo "\n";


        if ($currentGuess === implode("", $correctLetters)) {
            echo "\n";
            echo "CONGRATS YOU WIN 🎉🎈" . "\n";
            break;
        }

        if ($lives <= 0) {
            echo "YOU LOSE 😵 ☠️  💀 " . "\n";
            echo "
        __________
        | /      |
        |/       O
        |      --|--
        |        |
      __|__     / \ " . "\n";
            echo "GAME OVER" . "\n";
            break;
        }

    }

}

//almost works
playHangman();
function playAgain()
{
    echo "Would you like to play again???: yes / no" . "\n";
    $playAgain = trim(fgets(STDIN));



    if ($playAgain === "yes") {
        playHangman();
        Playagain();

    } else if ($playAgain === "no") {
        echo "Thanks for playing! 😃" . "\n";
        die();

    } else {
        echo "Please answer yes or no" . "\n";
        PlayAgain();
    }
}

playAgain();



//bugs and other things
//tiles do not work
//^ word has to be entered in order
// the word can only be "money unless you change the word and correct answers to go with it"
//^shuffle array("money", "shark", "chaos", "coin", "grain", "nursery", "error", "slippery", "juice", "evil");




