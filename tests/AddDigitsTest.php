<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\AddDigits;
use PHPUnit\Framework\TestCase;

class AddDigitsTest extends TestCase
{
    public function testNegativeArgumentExceptionUsingTenDivision(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/.+/');

        (new AddDigits())->addDigitsUsingTenDivision(-3);
    }

    public function testNegativeArgumentExceptionUsingStringConversion(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/.+/');

        (new AddDigits())->addDigitsUsingStringConversion(-3);
    }

    public function addDigitsDataProvider(): array
    {
        return [
            [0, 0],
            [9, 9],
            [10, 1],
            [128, 2],
            [919, 1],
            [1789, 7]
        ];
    }

    /**
     * @dataProvider addDigitsDataProvider
     */
    public function testAddDigitsUsingTenDivision($number, $expected): void
    {
        $result = (new AddDigits())->addDigitsUsingTenDivision($number);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider addDigitsDataProvider
     */
    public function testAddDigitsUsingStringConversion($number, $expected): void
    {
        $result = (new AddDigits())->addDigitsUsingStringConversion($number);
        $this->assertEquals($expected, $result);
    }
}
