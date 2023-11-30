<?php

namespace weatherStation\app;


class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private Observable $observable;
    private float $temperature;
    private float $humidity;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->registerObserver($this);
    }

    public function update(Observable $obs):void
    {
        $weatherData = $obs;
        $this->temperature = $weatherData->getTemperature();
        $this->humidity = $weatherData->getHumidity();
        $this->display();
    }

    public function display():void
    {
        echo '<pre>';
        print_r('Current conditions: ' . $this->temperature . ' and ' . $this->humidity . ' % humidity');
        echo '</pre>';
    }

    public function getClassName(): string
    {
        $array = explode('\\', __CLASS__);
        return $array[count($array) - 1];
    }

}