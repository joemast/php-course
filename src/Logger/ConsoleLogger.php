<?php

declare(strict_types=1);

namespace PHPCourse\Logger;

class ConsoleLogger extends AbstractLogger
{
    protected function log(string $message): void
    {
        print($message . PHP_EOL);
    }
}
