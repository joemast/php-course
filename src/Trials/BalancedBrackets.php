<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class BalancedBrackets
{
    public function isBalanced(string $brackets): bool
    {
        $brackets = trim($brackets);

        if (empty($brackets)) {
            return true;
        }

        if (!preg_match('/^[()]*$/', $brackets)) {
            return false;
        }

        $balanceCount = 0;
        foreach (str_split($brackets) as $char) {
            if ($char === '(') {
                $balanceCount++;
            } else {
                $balanceCount--;
            }
            if ($balanceCount < 0) {
                break;
            }
        }

        return $balanceCount === 0;
    }
}
