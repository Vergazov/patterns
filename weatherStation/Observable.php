<?php

namespace weatherStation\app;

class Observable
{
    protected array $observers;
    private bool $changed = false;

    public function registerObserver(Observer $o): void
    {
        $this->observers[$o->getClassName()] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        unset($this->observers[$o->getClassName()]);
    }

    public function notifyObservers(): void
    {
        if ($this->changed) {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
            $this->clearChanged();
        }
    }

    public function setChanged():void
    {
        $this->changed = true;
    }

    public function clearChanged()
    {
        $this->changed = false;
    }
}