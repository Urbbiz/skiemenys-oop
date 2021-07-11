<?php
namespace Syllable\IO;
use Syllable\IO;


class ExtractionValues {


    public $values = [];


    // isspausdina values is txt filo

    public  function getValues(){

        $file = new \SplFileObject(DIR."/data/inputfile.txt");
        while (!$file->eof()) {
            $values[] =  trim($file->fgets());
        }

        return $values;
    }


        //   <--------perdarom i masiva be skaiciu-------->
       protected function  valueNoNumbers($values) {

            $valuesNoNumbers= [];  // tokio pacio ilgio masyvas kaip ir values
            foreach ($values as $value){
                $valuesNoNumbers[] = str_replace(['1','2','3','4','5','6','7','8','9','0'], "",$value );
            }
            return $valuesNoNumbers;
        }
}