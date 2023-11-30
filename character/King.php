<?php


namespace character\app;


class King extends Character
{

    public function fight()
    {
        // TODO: Implement fight() method.
    }

    public function __construct()
    {
        $this->weapon = new SwordBehavior();
    }
}