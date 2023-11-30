<?php

namespace weatherStation\app;

interface Subject
{
    public function registerObserver(Observer $o):void;
    public function removeObserver(Observer $o):void;
    public function notifyObservers();
}