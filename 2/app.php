<?php
require __DIR__ . '/vendor/autoload.php';
use Th3Mouk\YahooWeatherAPI;
$weather = new YahooWeatherAPI\YahooWeatherAPI();
$weather->callApiCityName($name = 'Turku');
$wind = $weather->getWind();
$forecast = $weather->getForecast();

echo 'Weather info for ', $weather->getLocation() . PHP_EOL;
echo 'Current wind speed: ', $wind['speed'] . PHP_EOL;
echo 'Current direction: ', $wind['direction'] . PHP_EOL;
echo 'Forecast for tomorrow: '. $forecast[1]['text'], ', between ', $forecast[1]['low'], ' and ', $forecast[1]['high'], ' degrees' . PHP_EOL;
