<?php

declare(strict_types=1);

namespace Tests;

use PHPCourse\Trials\HappyTicket;
use PHPUnit\Framework\TestCase;

class HappyTicketTest extends TestCase
{
    public function happyNumberDataProvider(): array
    {
        return [
            'Empty string' => ['', false],
            'Non-numeric symbols' => ['1@3', false],
            'Uneven number of digits' => [' 111', false],
            'Shortest unhappy number' => ['01', false],
            'Shortest happy number' => ['11', true],
            'Long unhappy number' => ['231002', false],
            'Long happy number' => ['385916', true],
        ];
    }

    /**
     * @dataProvider happyNumberDataProvider
     */
    public function testTicketNumberIsHappy(string $number, bool $expected): void
    {
        $result = (new HappyTicket())->isHappy($number);

        $this->assertEquals($expected, $result);
    }
}
