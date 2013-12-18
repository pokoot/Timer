<?php

$loader = require __DIR__ . "/../vendor/autoload.php";

use Goldfinger\Timer;

$t = new Timer();

$t->start();

usleep(100);

print "<Br/> getTime = " . $t->getTime();

usleep(500);

print "<Br/> getTime = " . $t->getTime();

$t->stop();

