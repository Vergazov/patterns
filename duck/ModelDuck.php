<?php


namespace duck\app;


class ModelDuck extends Duck
{

    public function display(): void
    {
        echo 'I’m a model duck';
    }

    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }
}