<?php

use duck\app\FlyRocketPowered;
use duck\app\MallardDuck;
use duck\app\ModelDuck;

require_once (__DIR__ . '/vendor/autoload.php');

    $mallard = new MallardDuck();
    $mallard->performQuack();
    $mallard->performFly();

    $modelDuck = new ModelDuck();
    $modelDuck->performFly();
    $modelDuck->performQuack();
    $modelDuck->setFlyBehavior(new FlyRocketPowered());
    $modelDuck->performFly();

