<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use Trials\BinarySum;

$binSumObj = new BinarySum();
var_dump($binSumObj->binarySum('10', '01'));
var_dump($binSumObj->binarySum(' 111', '01 '));
var_dump($binSumObj->binarySum('01', '01'));
var_dump($binSumObj->binarySum(' 1a1', '01 '));
