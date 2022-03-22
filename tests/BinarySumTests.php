<?php

namespace Tests;

use Trials;
require_once '../src/Trials/BinarySum.php';

var_dump(Trials\binarySum('10', '01'));
var_dump(Trials\binarySum(' 111', '01 '));
var_dump(Trials\binarySum('01', '01'));
var_dump(Trials\binarySum(' 1a1', '01 '));

