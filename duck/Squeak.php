<?php

namespace duck\app;

class Squeak implements QuackBehavior
{
    public function quack():void
    {
        echo('Пищит');
    }
}
