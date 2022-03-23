<?php
declare(strict_types=1);

namespace Tests;

require_once '../src/Trials/PowerOfThree.php';

var_dump(\Trials\isPowerOfThree(1));
var_dump(\Trials\isPowerOfThree(-1));
var_dump(\Trials\isPowerOfThree(3));
var_dump(\Trials\isPowerOfThree(-3));
var_dump(\Trials\isPowerOfThree(-9)); // false because of even power (2)
var_dump(\Trials\isPowerOfThree(-27));
var_dump(\Trials\isPowerOfThree(-59049)); // false because of even power (10)
var_dump(\Trials\isPowerOfThree(59049));
var_dump(\Trials\isPowerOfThree(0)); // false
var_dump(\Trials\isPowerOfThree(2)); // false
var_dump(\Trials\isPowerOfThree(6)); // false
var_dump(\Trials\isPowerOfThree(999)); // false
