<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\PowerOfThree;
use PHPUnit\Framework\TestCase;

class PowerOfThreeTest extends TestCase
{
    public function powerOfThreeDataProvider(): array
    {
        return [
            [1, true],
            [-1, true],
            [3, true],
            [-3, true],
            [-9, false], // false because of even power (2)
            [-27, true],
            [59049, true],
            [-59049, false], // false because of even power (10)
            [0, false],
            [2, false],
            [999, false],
        ];
    }

    /**
     * @dataProvider powerOfThreeDataProvider
     */
    public function testPowerOfThree(int $number, bool $expected): void
    {
        $result = (new PowerOfThree())->isPowerOfThree($number);

        $this->assertEquals($expected, $result);
    }
}
