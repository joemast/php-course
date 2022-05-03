<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function fibDataProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 1],
            [5, 5],
            [8, 21],
        ];
    }

    /**
     * @dataProvider fibDataProvider
     */
    public function testFib(int $num, int $expected): void
    {
        $fibObj = new Fibonacci();

        $result = $fibObj->fib($num);
        $this->assertEquals($expected, $result);
    }

    public function disallowedNumbersDataProvider(): array
    {
        return [
            [-1],
            [11],
        ];
    }

    /**
     * @dataProvider disallowedNumbersDataProvider
     */
    public function testDisallowedNumbersException(int $num): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/.+/');

        (new Fibonacci())->fib($num);
    }
}
