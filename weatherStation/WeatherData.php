<?php

namespace weatherStation\app;

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

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
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure):void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}