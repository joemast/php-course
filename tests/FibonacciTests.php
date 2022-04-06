<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use PHPCourse\Trials\Fibonacci;

$fibObj = new Fibonacci();
var_dump($fibObj->fib(0));
var_dump($fibObj->fib(1));
var_dump($fibObj->fib(2));
var_dump($fibObj->fib(5));
var_dump($fibObj->fib(8));
var_dump($fibObj->fib(10));
