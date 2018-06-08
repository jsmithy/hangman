<?php




$lines = "_ _ _ _ _" . "\n";
function run()
{
    $lines;
    $ask = trim(fgets(STDIN));
    $correctLetters = array("m", "o", "n", "e", "y");
    echo $lines;

//if (in_array($ask, $correctLetters)) {
//        for ($i = 0; $i < count($correctLetters); $i++) {
//            array_push($tiles, "_");
//        }
//    }


    $replace1 = array(0 => "m");
    $replace2 = array(1 => "o");
    $replace3 = array(2 => "n");
    $replace4 = array(3 => "e");
    $replace5 = array(4 => "y");


    if (!function_exists('removeTiles')) {
        function removeTiles($ask, $correctLetters, $replace1, $replace2, $replace3, $replace4, $replace5, $lines)
        {
            if ($ask == $correctLetters[0]) {
                $lines = "m _ _ _ _" . "\n";
                echo $lines;
                //$newWord = array_replace($tiles, $replace1);
                //echo implode(" ", $newWord) . "\n";
            }
            if ($ask == $correctLetters[1]) {
                $newWord = array_replace($tiles, $replace2);
                echo implode(" ", $newWord) . "\n";
            }
            if ($ask == $correctLetters[2]) {
                $newWord = array_replace($tiles, $replace3);
                echo implode(" ", $newWord) . "\n";
            }
            if ($ask == $correctLetters[3]) {
                $newWord = array_replace($tiles, $replace4);
                echo implode(" ", $newWord) . "\n";
            }
            if ($ask == $correctLetters[4]) {
                $newWord = array_replace($tiles, $replace5);
                echo implode(" ", $newWord) . "\n";
            }
        }

        removeTiles($ask, $correctLetters, $replace1, $replace2, $replace3, $replace4, $replace5, $lines);

        echo "again? " . "\n";
        $again = trim(fgets(STDIN));
        if ($again == "y") {
            run();
        } else {
            die();
        }
    }
}
run();








//function playHangman()
//{
//    echo "hangman" . "\n";
//}
//playHangman();
//
//
//
//function playAgain()
//{
//echo "Would you like to play again???: yes / no" . "\n";
//$playAgain = trim(fgets(STDIN));
//
//
//
//if ($playAgain === "yes") {
//    playHangman();
//    Playagain();
//
//} else if ($playAgain === "no") {
//    echo "Thanks for playing! 😃" . "\n";
//    die();
//
//} else {
//    echo "Please answer yes or no" . "\n";
//    PlayAgain();
//}
//}
//
//playAgain();
//
//
////not added
//$wordList = array("money", "chaos", "grain", "error", "juice");
//shuffle($wordList);
//
//$correctLetters = ($wordList[0]);
//
//
//
//print_r($correctLetters);
//echo "\n";
//
//
//$test = array("test");
//implode("", $test);
//print_r($test);
//echo "\n";