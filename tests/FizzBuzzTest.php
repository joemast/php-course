<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function fizzBuzzDataProvider(): array
    {
        return [
            [5, 4, ''],
            [7, 7, '7'],
            [11, 20, '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz'],
            [30, 30, 'FizzBuzz'],
        ];
    }

    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function testFizzBuzz(int $begin, int $end, string $expected): void
    {
        $result = (new FizzBuzz())->fizzBuzzString($begin, $end);

        $this->assertEquals($expected, $result);
    }
}
