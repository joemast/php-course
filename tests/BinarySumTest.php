<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\BinarySum;
use PHPUnit\Framework\TestCase;

class BinarySumTest extends TestCase
{
    public function binarySumDataProvider(): array
    {
        return [
            'Successful scenario' => ['10', '01', '11'],
            'Args with leading/trailing spaces' => [' 111', '01 ', '1000'],
        ];
    }

    /**
     * @dataProvider binarySumDataProvider
     */
    public function testBinarySum(string $arg1, string $arg2, string $expected): void
    {
        $binSumObj = new BinarySum();

        $result = $binSumObj->binarySum($arg1, $arg2);
        $this->assertEquals($expected, $result);
    }

    public function nonBinaryArgumentsDataProvider(): array
    {
        return [
            ['013', '11'],
            ['10', '1d0'],
        ];
    }

    /**
     * @dataProvider nonBinaryArgumentsDataProvider
     */
    public function testNonBinaryArgumentsException(string $arg1, string $arg2): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/.+/');

        (new BinarySum())->binarySum($arg1, $arg2);
    }
}
