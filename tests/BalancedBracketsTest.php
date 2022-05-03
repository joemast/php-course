<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\BalancedBrackets;
use PHPUnit\Framework\TestCase;

class BalancedBracketsTest extends TestCase
{
    public function isBalancedDataProvider(): array
    {
        return [
            [' ', true],
            [')(', false],
            ['(', false],
            [')', false],
            ['()()', true],
            ['(((())))', true],
            ['((((()()))))', true],
        ];
    }

    /**
     * @dataProvider isBalancedDataProvider
     */
    public function testIsBalanced(string $case, bool $expected): void
    {
        $bracketsObj = new BalancedBrackets();
        $result = $bracketsObj->isBalanced($case);

        $this->assertEquals($expected, $result);
    }
}
