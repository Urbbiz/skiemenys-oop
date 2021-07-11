<?php
namespace Syllable\App;
use Syllable\App;
use Syllable\Service\SyllableAlgorithm;
use Syllable\IO\ExtractionValues;
use Syllable\IO\Input\UserInput;


class Application
{
public function runApp (){


    $userInput = new UserInput;
    $givenWord = $userInput->getInputWord();  // paduoda ivesta zodi

    $startTime = microtime(true); // laiko pradzia

    $extractionValues = new ExtractionValues();
    $values = $extractionValues->getValues(); // issitraukiam txt failo turini.

    $SyllableAlgorithm = new SyllableAlgorithm();
    $syllableWord=$SyllableAlgorithm->syllableMaker($givenWord, $values);
    echo   $syllableWord . "\n";   // parodo isskiemenuota zodi.

    $endTime = microtime(true); //laiko pabaiga
    $executionTime = round($endTime - $startTime, 4); // programos veikimo laikas suapvalintas iki 4 skaiciu po kablelio
    echo "Execution time: $executionTime seconds";

    }

    // public function getInputWord(){

    // echo "Please Enter the word you want to syllable", "\n";
    //     echo "Enter Word here: ";

    //     $givenWord = trim(fgets(STDIN, 1024));

    //     echo "The word you entered is: $givenWord". "\n";
    // return $givenWord;
    // }
}