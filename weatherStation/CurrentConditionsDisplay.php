<?php

namespace weatherStation\app;


class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private Subject $weatherData;


    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure):void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
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