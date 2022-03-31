<?php
declare(strict_types=1);

namespace Trials;

function fib(int $num): int
{
    if ($num === 0) {
        return 0;
    }
    if ($num === 1 || $num === 2) {
        return 1;
    }

    return fib($num - 1) + fib($num - 2);
}
