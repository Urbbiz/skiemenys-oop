<?php

namespace Syllable\IO;

use Syllable\IO;


class Pattern 
{

    function __construct($value) {
        $this->RawPattern = $value;
        $this->PatternNoNumbers = str_replace(['1','2','3','4','5','6','7','8','9','0'], "",$value );
    }
    private string $RawPattern;
    private string $PatternNoNumbers; 


   function  __toString(): string {
        return $this->RawPattern;

    }
    
    
    function getPatternWithoutNumbers():string 
    {
        return $this->PatternNoNumbers;
    }
}






