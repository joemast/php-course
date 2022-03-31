<?php
declare(strict_types=1);

namespace Tests;

require_once '../src/Trials/Fibonacci.php';

$fibObj = new \Trials\Fibonacci();
var_dump($fibObj->fib(0));
var_dump($fibObj->fib(1));
var_dump($fibObj->fib(2));
var_dump($fibObj->fib(5));
var_dump($fibObj->fib(8));
var_dump($fibObj->fib(10));

