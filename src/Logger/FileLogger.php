<?php

declare(strict_types=1);

namespace PHPCourse\Logger;

class FileLogger extends AbstractLogger
{
    private string $logFileName;

    public function __construct(?string $fileName = 'phpcourse.log')
    {
        if (empty($fileName)) {
            $fileName = 'phpcourse.log';
        }
        $this->logFileName = $fileName;
    }

    protected function log(string $message): void
    {
        file_put_contents($this->logFileName, $message . PHP_EOL, FILE_APPEND);
    }
}
