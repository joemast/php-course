<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class BinarySum
{
    public function binarySum(string $arg1, string $arg2): string
    {
        $arg1 = trim($arg1);
        $arg2 = trim($arg2);

        $pattern = '/^[01]*$/';
        if (!preg_match($pattern, $arg1) || !preg_match($pattern, $arg2)) {
            throw new \InvalidArgumentException('Only binary numeric arguments allowed');
        }

        return decbin(bindec($arg1) + bindec($arg2));
    }
}
