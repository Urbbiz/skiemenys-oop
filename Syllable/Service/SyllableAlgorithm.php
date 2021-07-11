<?php
namespace Syllable\Service;
use Syllable\Service;
use Syllable\IO\ExtractionValues;



class SyllableAlgorithm extends ExtractionValues  implements SyllableAlgorithmInterface {

    

    public function  syllableMaker($givenWord, $values) {

        $givenWord =$this->addDots($givenWord);// uzdedam taskus is priekio ir galo duotam zodziui

        $valuesNoNumbers=$this->valueNoNumbers($values);  // perdaro masyva be skaiciu

        $foundValues= [];
        foreach ($valuesNoNumbers as $key=> $value){  // einam per masyva be skaiciu

            $found=false;
            do {                          // ieskom skiemens givenWorde
                $offset = 0;
                if ($found != false) {    // jeigu randa atitikmeni
                    $offset = $found + 1;    // found pozicija kur rado, nustatom offset, kad ieskotu nuo toliau, negu rado
                    $snippet = $values[$key];  // pasiimam is paduoto masyvo lygiai ta pati ka radom, tik su skaiciais.

                    $snippetIndex = 0;   // char indexas skiemenyje, kuri radom(mis3)

                    for($i= 0; $i < strlen($snippet); $i++ ){

                        $number = intval($snippet[$i]);  //tai yra pvz m raide ir bando , jeigu ne skaicius, grazins nuli, nes pas mus nera nulio.

                        if($number > 0 ){   // jeigu daugiau uz 0 , reiskia rado skaiciu (3)

                            $index = $snippetIndex + $found -1;  // inexas tai yra vieta po kurio irasinesim ta skaiciu , musu duotame zodyje.

                            if (!array_key_exists($index, $foundValues) || $foundValues[$index] < $number ){ // tikrinam ar jau buvo toks indexas tame masyve, jeigu buvo  tai irasom didesni, jeigu nebuvo, tai tiesiog ierasom nauja
                                $foundValues[$index] = $number;
                                }
                        }else {
                            $snippetIndex ++;   // didins kai tik atras raide, o ne skaiciu
                        }
                    }
                    // echo "positionInWord: ". $found .", value: " . $values[$key] . "\n";
                }
                $found = stripos($givenWord, $value, $offset);  // ieskom value duotam zodyje , nuo vietos kuria nurodo offset.

            }while($found != false);   // sukam cikla tol, kol randam zodyje kelis skiemenu atitikmenis
        }


        return "Word in syllables: ". $finalResult = $this->numbersToDash($givenWord, $foundValues);  //<--- keicia skaiciu i minusa
    }

        // <--------perdarom i masiva be skaiciu-------->
    //    private function  valueNoNumbers($values) {

    //         $valuesNoNumbers= [];  // tokio pacio ilgio masyvas kaip ir values
    //         foreach ($values as $value){
    //             $valuesNoNumbers[] = str_replace(['1','2','3','4','5','6','7','8','9','0'], "",$value );
    //         }
    //         return $valuesNoNumbers;
    //     }

        // <--------pakeicia nelyginius skaicius i -   ir isveda galutini atsakyma-------->
        private function numbersToDash($givenWord, $foundValues){
            $finalResult = "";
            for ($i=0; $i < strlen($givenWord) ; $i++) {
                $finalResult .=  $givenWord[$i];  // pridedam raide

                if(array_key_exists($i,$foundValues ) && $foundValues[$i]% 2 ==1 ){
                    $finalResult .=  "-";   // jeigu egzistuoja ir nelyginis pakeiciam i -
                }
            }
            return trim($finalResult,".");
        }

        // <--------prideda taskus prie duoto zodzio pradzioj ir gale-------->
        protected function addDots($givenWord){

            $givenWord = ".".$givenWord.".";  // uzdedam taskus
            return $givenWord;
        }



    }