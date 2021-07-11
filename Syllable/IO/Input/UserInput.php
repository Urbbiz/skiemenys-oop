<?php
namespace Syllable\IO\Input;
use Syllable\IO\Input;


class UserInput {

    public function getInputWord(){

        echo "Please Enter the word you want to syllable", "\n";
            echo "Enter Word here: ";
    
            $givenWord = trim(fgets(STDIN, 1024));
    
            echo "The word you entered is: $givenWord". "\n";
        return $givenWord;
        }





}