<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\PerfectNumbers;
use PHPUnit\Framework\TestCase;

class PerfectNumbersTest extends TestCase
{
    public function perfectNumbersDataProvider(): array
    {
        return [
            [-1, false],
            [0, false],
            [5, false],
            [6, true],
            [7, false],
            [27, false],
            [28, true],
            [29, false],
            [496, true],
            [8128, true],
        ];
    }

    /**
     * @dataProvider perfectNumbersDataProvider
     */
    public function testNumberIsPerfect(int $number, bool $expected): void
    {
        $result = (new PerfectNumbers())->isPerfect($number);

        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider perfectNumbersDataProvider
     */
    public function testNumberIsPerfectUsingArray(int $number, bool $expected): void
    {
        $result = (new PerfectNumbers())->isPerfect($number);

        $this->assertEquals($expected, $result);
    }
}
