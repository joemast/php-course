<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use PHPCourse\Logger\LoggerFactory;
use PHPCourse\PhpCourseApp;

$config = require "config.php";
$logger = LoggerFactory::getLogger($config);

(new PhpCourseApp($logger))->run();
