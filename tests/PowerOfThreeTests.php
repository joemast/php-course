<?php
declare(strict_types=1);

namespace Tests;

require_once '../src/Trials/PowerOfThree.php';

$powerObj = new \Trials\PowerOfThree();
var_dump($powerObj->isPowerOfThree(1));
var_dump($powerObj->isPowerOfThree(-1));
var_dump($powerObj->isPowerOfThree(3));
var_dump($powerObj->isPowerOfThree(-3));
var_dump($powerObj->isPowerOfThree(-9)); // false because of even power (2)
var_dump($powerObj->isPowerOfThree(-27));
var_dump($powerObj->isPowerOfThree(-59049)); // false because of even power (10)
var_dump($powerObj->isPowerOfThree(59049));
var_dump($powerObj->isPowerOfThree(0)); // false
var_dump($powerObj->isPowerOfThree(2)); // false
var_dump($powerObj->isPowerOfThree(6)); // false
var_dump($powerObj->isPowerOfThree(999)); // false
