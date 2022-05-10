<?php

declare(strict_types=1);

namespace PHPCourse\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    public function error(string $message): void
    {
        $this->log('[ERROR] ' . $message);
    }

    public function warning(string $message): void
    {
        $this->log('[WARNING] ' . $message);
    }

    public function info(string $message): void
    {
        $this->log('[INFO] ' . $message);
    }

    abstract protected function log(string $message): void;
}
