<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class PowerOfThree
{
    /**
     * @param int $int - it can also be a negative integer
     * @return bool
     */
    public function isPowerOfThree(int $int): bool
    {
        if ($int === 0) {
            return false;
        }

        if (abs($int) === 1) {
            return true;
        }

        $isPoT = true;
        $poT = 0;
        while (abs($int) > 1) {
            if ($int % 3 !== 0) {
                $isPoT = false;
            }
            $poT++;
            $int = intdiv($int, 3);
        }
        $poTisEven = $poT % 2 === 0;

        return ($int < 0 && !$poTisEven && $isPoT) || ($int > 0 && $isPoT);
    }
}
