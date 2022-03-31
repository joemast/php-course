<?php
declare(strict_types=1);

namespace Trials;

class Fibonacci
{
    public function fib(int $num): int
    {
        if ($num === 0) {
            return 0;
        }
        if ($num === 1 || $num === 2) {
            return 1;
        }

        return $this->fib($num - 1) + $this->fib($num - 2);
    }
}
