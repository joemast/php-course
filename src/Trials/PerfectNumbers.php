<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class PerfectNumbers
{
    private const MIN_PERFECT_NUMBER = 6;

    public function isPerfect(int $number): bool
    {
        if ($number < self::MIN_PERFECT_NUMBER) {
            return false;
        }

        $dlmtrsSum = 0;
        for ($i = 1; $i < $number; ++$i) {
            if ($number % $i === 0) {
                $dlmtrsSum += $i;
            }
        }

        return $dlmtrsSum === $number;
    }

    public function isPerfectUsingArray(int $number): bool
    {
        if ($number < self::MIN_PERFECT_NUMBER) {
            return false;
        }

        return $number === array_sum(
            array_filter(
                range(1, $number - 1),
                static function ($item) use ($number) {
                    return $number % $item === 0;
                }
            )
        );
    }
}
