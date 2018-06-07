<?php



function playHangman()
{
    echo "hangman" . "\n";
}
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


//not added
$wordList = array("money", "chaos", "grain", "error", "juice");
shuffle($wordList);

$correctLetters = ($wordList[0]);



print_r($correctLetters);
echo "\n";


$test = array("test");
implode("", $test);
print_r($test);
echo "\n";




// $ask = trim(fgets(STDIN));
//    $word = array("m", "o", "n", "e", "y");
//echo implode("", $word);
//
//    $tiles = array();
//function run()
//{
//
//    if (in_array($ask, $word)) {
//        for ($i = 0; $i < count($word); $i++) {
//            array_push($tiles, "_");
//        }
//    }
//}
//    $replace1 = array(0 => "m");
//    $replace2 = array(1 => "o");
//    $replace3 = array(2 => "n");
//    $replace4 = array(3 => "e");
//    $replace5 = array(4 => "y");
//
//print_r($tiles);
//
//    switch ($ask) {
//        case $word[0]:
//            $newWord = array_replace($tiles, $replace1);
//            echo implode(" ", $newWord) . "\n";
//            break;
//        case $word[1]:
//            $newWord = array_replace($tiles, $replace2);
//            print_r($newWord);
//            break;
//        case $word[2]:
//            $newWord = array_replace($tiles, $replace3);
//            print_r($newWord);
//            break;
//        case $word[3]:
//            $newWord = array_replace($tiles, $replace4);
//            print_r($newWord);
//            break;
//        case $word[4]:
//            $newWord = array_replace($tiles, $replace5);
//            print_r($newWord);
//            break;
//    }
