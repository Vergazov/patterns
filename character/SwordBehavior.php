<?php


namespace character\app;


class SwordBehavior implements WeaponBehavior
{

    public function useWeapon()
    {
        echo 'Удар мечом';
    }
}