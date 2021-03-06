<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class AddDigits
{
    public function addDigitsUsingStringConversion(int $number): int
    {
        if ($number < 0) {
            throw new \InvalidArgumentException('Only positive integer numbers allowed');
        }

        if ($number < 10) {
            return $number;
        }

        $numArray = array_map('intval', str_split((string)$number));
        $res = array_sum($numArray);

        return $this->addDigitsUsingStringConversion($res);
    }

    public function addDigitsUsingTenDivision(int $number): int
    {
        if ($number < 0) {
            throw new \InvalidArgumentException('Only positive integer numbers allowed');
        }

        if ($number < 10) {
            return $number;
        }

        $digitsCount = strlen((string)$number);
        $res = 0;
        for ($i = 0; $i < $digitsCount; ++$i) {
            $res += $number % 10;
            $number = (int)($number / 10);
        }

        return $this->addDigitsUsingTenDivision($res);
    }
}
