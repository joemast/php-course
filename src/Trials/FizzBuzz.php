<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class FizzBuzz
{
    public function fizzBuzz(int $begin, int $end): void
    {
        print $this->fizzBuzzString($begin, $end);
    }

    public function fizzBuzzString(int $begin, int $end): string
    {
        if ($begin > $end) {
            return '';
        }

        $result = [];
        foreach (range($begin, $end) as $item) {
            switch ($item) {
                case ($this->isDiv3and5($item)):
                    $result[] = "FizzBuzz";
                    break;
                case ($this->isDiv3($item)):
                    $result[] = "Fizz";
                    break;
                case ($this->isDiv5($item)):
                    $result[] = "Buzz";
                    break;
                default:
                    $result[] = $item;
            }
        }

        return implode(' ', $result);
    }

    private function isDiv5(int $num): bool
    {
        return $num % 5 === 0;
    }

    private function isDiv3(int $num): bool
    {
        return $num % 3 === 0;
    }

    private function isDiv3and5(int $num): bool
    {
        return $this->isDiv3($num) && $this->isDiv5($num);
    }
}
