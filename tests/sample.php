<?php

$loader = require __DIR__ . "/../vendor/autoload.php";

use Goldfinger\Timer;

$t = new Timer();

$t->start();

sleep(2);

print "<Br/> getTime = " . $t->getTime();

sleep(2);

print "<Br/> getTime = " . $t->getTime();

$t->stop();
