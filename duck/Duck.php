<?php

namespace duck\app;

abstract class Duck
{
    public QuackBehavior $quackBehavior;
    public FlyBehavior $flyBehavior;

    abstract public function display(): void;

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $fb): void
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb): void
    {
        $this->quackBehavior = $qb;
    }


    public function swim(): void
    {
        dump('All ducks float, even decoys!');
    }

}
