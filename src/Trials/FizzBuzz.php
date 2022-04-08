<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

class FizzBuzz
{
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

    public function doFizzBuzz(int $begin, int $end): void
    {
        if ($begin > $end) {
            return;
        }

        foreach (range($begin, $end) as $item) {
            switch ($item) {
                case ($this->isDiv3and5($item)):
                    print "FizzBuzz";
                    break;
                case ($this->isDiv3($item)):
                    print "Fizz";
                    break;
                case ($this->isDiv5($item)):
                    print "Buzz";
                    break;
                default:
                    print $item;
            }
            print " ";
        }

        print PHP_EOL;
    }
}
