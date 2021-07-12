<?php
namespace Syllable\IO;
use  Syllable\IO;

class PatternResult {

    private array $patterns;


    function addPattern(Pattern $pattern): void
    {
        $this->patterns[]= $pattern;
    } 
    function getPatterns(): array
    {
       return $this->patterns; 
    } 
}


