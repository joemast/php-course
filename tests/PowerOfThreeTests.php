<?php

namespace Tests;

require_once '../src/Trials/PowerOfThree.php';
use function Trials\isPowerOfThree;

var_dump(isPowerOfThree(1));
var_dump(isPowerOfThree(-1));
var_dump(isPowerOfThree(3));
var_dump(isPowerOfThree(-3));
var_dump(isPowerOfThree(-9)); // false because of even power (2)
var_dump(isPowerOfThree(-27));
var_dump(isPowerOfThree(-59049)); // false because of even power (10)
var_dump(isPowerOfThree(59049));
var_dump(isPowerOfThree(0)); // false
var_dump(isPowerOfThree(2)); // false
var_dump(isPowerOfThree(6)); // false
