<?php


namespace character\app;


class Troll extends Character
{

    public function fight()
    {
        // TODO: Implement fight() method.
    }

    public function __construct()
    {
        $this->weapon = new BowAndArrowBehavior();
    }
}