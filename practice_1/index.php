<?php

require __DIR__.'/vendor/autoload.php';

use Asciito\UMLPracticeOne\Creep;
use Asciito\UMLPracticeOne\Tortoise;

$creep = new Creep();

$alex   = new Tortoise('Alex',  100, 100);
$javier = new Tortoise('Javier', 90, 120);
$norman = new Tortoise('Normal', 98, 101);
$drac   = new Tortoise('Drac',  111, 105);

$creep[] = $alex;
$creep[] = $drac;

$creep->addTortoise($norman);

$creep[3] = $javier;

foreach ($creep as $tortoise) {
    echo "This is the information of a tortoise" . PHP_EOL;

    print_r($tortoise);
}

echo "This is the information from the creep" . PHP_EOL;

print_r($creep);
