<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use PHPCourse\Trials\FizzBuzz;

$fizzBuzzObj = new FizzBuzz();
$fizzBuzzObj->doFizzBuzz(5, 4);
$fizzBuzzObj->doFizzBuzz(7, 7);
$fizzBuzzObj->doFizzBuzz(11, 20);
$fizzBuzzObj->doFizzBuzz(30, 30);
