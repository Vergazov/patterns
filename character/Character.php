<?php

namespace character\app;

abstract class Character
{
    public WeaponBehavior $weapon;

    abstract public function fight();

    public function setWeapon(WeaponBehavior $w)
    {
        $this->weapon = $w;
    }

}