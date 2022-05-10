<?php

declare(strict_types=1);

namespace PHPCourse\Logger;

class FileLogger extends AbstractLogger
{
    private string $_logFileName;

    public function __construct(string $fileName = 'phpcourse.log')
    {
        $this->_logFileName = $fileName;
    }

    protected function log(string $message): void
    {
        file_put_contents($this->_logFileName, $message . PHP_EOL, FILE_APPEND);
    }
}
