<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use PHPCourse\Logger\FileLogger;
use PHPCourse\PhpCourseApp;

$config = require "config.php";
$config['logger'] = new FileLogger();

(new PhpCourseApp($config))->run();
