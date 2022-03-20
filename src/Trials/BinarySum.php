<?php
declare(strict_types=1);

namespace Trials;

function binarySum (string $arg1, string $arg2): string
{
    $arg1 = trim($arg1);
    $arg2 = trim($arg2);

    // alternate way
//    $pattern = "/[^01]/";
//    if (preg_match($pattern, $arg1) || preg_match($pattern, $arg2)) {
//        throw new \Exception("Non-binary data given");
//    }

    return decbin(bindec($arg1) + bindec($arg2));
}
