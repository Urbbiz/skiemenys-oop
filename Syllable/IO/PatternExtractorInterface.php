<?php
namespace Syllable\IO;
use  Syllable\IO;

interface PatternExtractorInterface
{
    public function  getPatterns($filePath) : PatternResult; 


}