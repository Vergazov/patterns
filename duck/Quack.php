<?php

namespace duck\app;

class Quack implements QuackBehavior
{
    public function quack():void
    {
        echo('Крякает');
    }
}
