<?php


namespace character\app;


class Queen extends Character
{

    public function fight()
    {
        // TODO: Implement fight() method.
    }

    public function __construct()
    {
        $this->weapon = new KnifeBehavior();
    }
}