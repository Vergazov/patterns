<?php

namespace duck\app;

class MuteQuack implements QuackBehavior
{
    public function quack():void
    {
        echo('<<Тишина>>');
    }
}
