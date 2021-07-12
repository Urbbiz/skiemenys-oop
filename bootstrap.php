<?php
session_start();

// define('INSTALL_DIR','/visma/skiemenys-oop/');
define('DIR', __DIR__.'/');

//spl_autoload_register('myAutoLoader');

//function myAutoLoader($className) {
//    $path = "IO/old-Syllable/";
//    $extension = ".php";
//    $fullpath = $path . $className . $extension;
//
//    include_once $fullpath;
//
//}

//
require DIR . 'Syllable/App/Application.php';
require DIR . 'Syllable/IO/PatternExtractorInterface.php';
require DIR . 'Syllable/IO/PatternResult.php';
require DIR . 'Syllable/IO/PatternExtractor.php';
require DIR . 'Syllable/IO/Input/UserInput.php';
require DIR . 'Syllable/IO/Pattern.php';
require DIR . 'Syllable/Service/SyllableAlgorithmInterface.php';
require DIR . 'Syllable/Service/SyllableAlgorithm.php';
require DIR . 'Syllable/Service/SyllableResult.php';


//spl_autoload_register(function($className){
//
//    $prefix ='old-Syllable';   //namespace
//    $base_dir = DIR . '/IO/old-Syllable/';  // path
//    $len = strlen($prefix);
//    if(strncmp($prefix, $className, $len) !== 0) {
//        return;
//    }
//    $relative_class = substr($className, $len);
//    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//    if (file_exists($file)) {
//       require $file;
//    }
//
//});




?>