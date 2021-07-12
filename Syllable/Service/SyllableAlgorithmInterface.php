<?php


namespace Syllable\Service;
use  Syllable\Service;
use Syllable\IO\PatternResult;


interface SyllableAlgorithmInterface
{
    function  syllable(string $givenWord, PatternResult $patternResult): SyllableResult;
}