<?php

namespace duck\app;

class FlyWithWings implements FlyBehavior
{
    public function fly():void
    {
        echo('Летает!');
    }
}
