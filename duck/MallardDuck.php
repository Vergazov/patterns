<?php

namespace duck\app;

class MallardDuck extends Duck
{
    public function display(): void
    {
        echo('I’m a real Mallard duck');
    }

    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }
}
