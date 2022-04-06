<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use PHPCourse\Trials\HappyTicket;

$ticketObj = new HappyTicket();
var_dump($ticketObj->isHappy('')); // false
var_dump($ticketObj->isHappy('1a1')); // false
var_dump($ticketObj->isHappy(' 111')); // false
var_dump($ticketObj->isHappy('01')); // false
var_dump($ticketObj->isHappy('1212')); // true
var_dump($ticketObj->isHappy('11')); // true
var_dump($ticketObj->isHappy('324126')); // true
var_dump($ticketObj->isHappy('00')); // true
var_dump($ticketObj->isHappy('385916')); // true
var_dump($ticketObj->isHappy('231002')); // false
var_dump($ticketObj->isHappy('054702')); // true
