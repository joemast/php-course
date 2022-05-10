<?php

declare(strict_types=1);

namespace PHPCourse\Logger;

interface LoggerInterface
{
    public function error(string $message): void;
    public function warning(string $message): void;
    public function info(string $message): void;
}
