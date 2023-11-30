<?php

namespace weatherStation\app;

class WeatherData extends Observable
{
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function measurementsChanged(): void
    {
        $this->setChanged();
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }
    public function getHumidity(): float
    {
        return $this->humidity;
    }
    public function getPressure(): float
    {
        return $this->pressure;
    }
}