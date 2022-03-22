<?php

namespace Tests;

require_once '../src/Trials/BinarySum.php';
use function Trials\binarySum;

var_dump(binarySum('10', '01'));
var_dump(binarySum(' 111', '01 '));
var_dump(binarySum('01', '01'));
var_dump(binarySum(' 1a1', '01 '));

