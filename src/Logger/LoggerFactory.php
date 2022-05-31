<?php

namespace PHPCourse\Logger;

class LoggerFactory
{
    /**
     * @throws \Exception
     */
    public static function getLogger(array $config): ?LoggerInterface
    {
        switch ($config['logger']) {
            case 'console': return new ConsoleLogger();
            case 'file': return new FileLogger($config['logFileName']);
            default: throw new \Exception('Logger not configured');
        }
    }
}