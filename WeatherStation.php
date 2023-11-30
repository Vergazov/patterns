<?php

    use weatherStation\app\CurrentConditionsDisplay;
    use weatherStation\app\WeatherData;

    require_once (__DIR__ . '/vendor/autoload.php');

    $weatherData = new WeatherData();
    $currentDisplay = new CurrentConditionsDisplay($weatherData);
    $weatherData->setMeasurements(80, 65, 30.4);
//    $weatherData->setMeasurements(74, 68, 27.5);
//    $weatherData->setMeasurements(72, 67, 27.2);

