<?php

declare(strict_types=1);

require_once "vendor/autoload.php";
require_once "config.php";

use PHPCourse\Logger\FileLogger;
use PHPCourse\PhpCourseApp;

$config['logger'] = new FileLogger();

(new PhpCourseApp($config))->run();
