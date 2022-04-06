<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use Trials\AddDigits;

$addDigitsObj = new AddDigits();
var_dump($addDigitsObj->addDigitsUsingStringConversion(0));
var_dump($addDigitsObj->addDigitsUsingStringConversion(1));
var_dump($addDigitsObj->addDigitsUsingStringConversion(9));
var_dump($addDigitsObj->addDigitsUsingStringConversion(10));
var_dump($addDigitsObj->addDigitsUsingStringConversion(128)); // 2
var_dump($addDigitsObj->addDigitsUsingStringConversion(919)); // 1
var_dump($addDigitsObj->addDigitsUsingStringConversion(1789)); // 7

var_dump($addDigitsObj->addDigitsUsingTenDivision(0));
var_dump($addDigitsObj->addDigitsUsingTenDivision(1));
var_dump($addDigitsObj->addDigitsUsingTenDivision(9));
var_dump($addDigitsObj->addDigitsUsingTenDivision(10));
var_dump($addDigitsObj->addDigitsUsingTenDivision(128)); // 2
var_dump($addDigitsObj->addDigitsUsingTenDivision(919)); // 1
var_dump($addDigitsObj->addDigitsUsingTenDivision(1789)); // 7
