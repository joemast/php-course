<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class HappyTicket
{
    public function isHappy(string $ticket): bool
    {
        // trim unhappy boarder spaces
        $ticket = trim($ticket);

        // make sure string is not empty and there are even number of symbols
        if ($ticket === '' || strlen($ticket) % 2 !== 0) {
            return false;
        }

        // make sure ticket contains only digits
        $regex = '/^\d*$/';
        if (!preg_match($regex, $ticket)) {
            return false;
        }

        $numArray = array_map('intval', str_split($ticket));
        $leftPart = array_slice($numArray, 0, count($numArray) / 2);
        $rightPart = array_slice($numArray, count($numArray) / 2);

        return array_sum($leftPart) === array_sum($rightPart);
    }
}
