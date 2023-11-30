<?php

use character\app\King;
use character\app\KnifeBehavior;

require_once (__DIR__ . '/vendor/autoload.php');

$king = new King();

print_r($king);
$king->weapon->useWeapon();

$king->setWeapon(new KnifeBehavior());
print_r($king);
$king->weapon->useWeapon();

$arr = new ArrayObject();
$arr->append(1);
$arr->append(2);
$arr->offsetUnset(1);
echo '<pre>';
print_r($arr);
echo '</pre>';