<?php


class attempt
{
    private $maxAttempts = 6;
    //    private $hideLetters
    //    private $checkLetter

    public function __construct($attemptValue)
    {
        $this->maxAttempts = $attemptValue;
    }

    public function getMaxAttempts()
    {
        return $this->maxAttempts;
    }


    public function setMaxAttempts($attemptValue)
    {
        $this->maxAttempts = $attemptValue;
        return $this;
    }


    public function __toString()
    {
        return "You have " . $this->getMaxAttempts() . " attempts to guess the word." . "\n";

    }

}



class hiddenWord
{
    private $wordList;


    public function __construct($chosenWords)
    {
        $this->wordList = $chosenWords;
    }


    public function getWordList()
    {
        return $this->wordList;
    }


    public function setWordList($chosenWords)
    {
        $this->wordList = $chosenWords;
        return $this;
    }


    public function __toString()
    {
        return "The word is " . $this->getWordList() . "\n";

    }

}

//not used anymore
////head
//class hangman1
//{
//    private $head;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->head = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->head;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->head = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//                 __________
//                 | /      |
//                 |/       O
//                 |
//                 |
//               __|__      ";
//
//    }
//
//}
//
//
////torso
//class hangman2
//{
//    private $torso;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->torso = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->torso;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->torso = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//                 __________
//                 | /      |
//                 |/       O
//                 |        |
//                 |        |
//               __|__      ";
//
//    }
//
//}
//
//
////arm 1
//class hangman3
//{
//    private $arm1;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->arm1 = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->arm1;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->arm1 = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//                 __________
//                 | /      |
//                 |/       O
//                 |      --|
//                 |        |
//               __|__      ";
//
//    }
//
//}
//
//
//// arm 2
//class hangman4
//{
//    private $arm2;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->arm2 = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->arm2;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->arm2 = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//                 __________
//                 | /      |
//                 |/       O
//                 |      --|--
//                 |        |
//               __|__      ";
//
//    }
//
//}
//
//
//
//// leg 1
//class hangman5
//{
//    private $leg1;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->leg1 = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->leg1;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->leg1 = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//                 __________
//                 | /      |
//                 |/       O
//                 |      --|--
//                 |        |
//               __|__     /  ";
//
//    }
//
//}
//
//
//// leg 2
//class hangman6
//{
//    private $leg2;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->leg2 = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->leg2;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->leg2 = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//        __________
//        | /      |
//        |/       O
//        |      --|--
//        |        |
//      __|__     / \ " . "\n";
//
//    }
//
//}
//
//
//// blank
//class hangman7
//{
//    private $blank;
//
//
//    public function __construct($hangingMan)
//    {
//        $this->blank = $hangingMan;
//    }
//
//
//    public function getPerson()
//    {
//        return $this->blank;
//    }
//
//
//    public function setWordList($hangingMan)
//    {
//        $this->blank = $hangingMan;
//        return $this;
//    }
//
//
//    public function __toString()
//    {
//        return "
//        __________
//        | /      |
//        |/
//        |
//        |
//      __|__      ";
//
//    }
//
//}


