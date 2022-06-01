<?php

declare(strict_types=1);

namespace PHPCourse\Trials;

use PHPCourse\Logger\LoggerInterface;

class BinarySum
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function binarySum(string $arg1, string $arg2): string
    {
        $arg1 = trim($arg1);
        $arg2 = trim($arg2);

        $pattern = '/^[01]*$/';
        if (!preg_match($pattern, $arg1) || !preg_match($pattern, $arg2)) {
            $errorMessage = 'Only binary numeric arguments allowed';
            $this->logger->error($errorMessage);
            throw new \InvalidArgumentException($errorMessage);
        }

        $result = decbin(bindec($arg1) + bindec($arg2));

        $this->logger->info("Result of binary sum: $arg1 + $arg2 = $result");

        return $result;
    }
}
