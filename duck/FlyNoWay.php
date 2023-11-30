<?php


namespace duck\app;


class FlyNoWay implements FlyBehavior
{
    public function fly():void
    {
        echo('I can’t fly');
    }
}
