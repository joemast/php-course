<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class Fibonacci
{
    private const MAX_ALLOWED = 10;

    public function fib(int $num): int
    {
        if ($num > self::MAX_ALLOWED || $num < 0) {
            throw new \InvalidArgumentException(
                'Only positive integer numbers less than ' . self::MAX_ALLOWED . ' are allowed'
            );
        }

        if ($num === 0) {
            return 0;
        }

        if ($num === 1 || $num === 2) {
            return 1;
        }

        return $this->fib($num - 1) + $this->fib($num - 2);
    }
}
