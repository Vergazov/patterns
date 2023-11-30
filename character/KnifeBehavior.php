<?php


namespace character\app;


class KnifeBehavior implements WeaponBehavior
{

    public function useWeapon()
    {
        echo 'Удар ножом';
    }
}