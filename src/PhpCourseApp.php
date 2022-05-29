<?php

declare(strict_types=1);

namespace PHPCourse;

use PHPCourse\Logger\LoggerInterface;
use PHPCourse\Trials\AddDigits;
use PHPCourse\Trials\BinarySum;

class PhpCourseApp
{
    private LoggerInterface $logger;

    public function __construct(array $config)
    {
        $this->logger = $config['logger'];
    }

    public function run(): void
    {
        (new AddDigits())->addDigitsUsingStringConversion(123);
        (new BinarySum($this->logger))->binarySum('11', '11');
    }
}
