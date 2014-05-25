<?php

namespace Tests;

use Weather\WeatherLibrary;

class WeatherLibraryTest extends \PHPUnit_Framework_TestCase
{
    public $library;
    public $woeidSample;

    public function setUp(){
        $this->library = new WeatherLibrary();
        $this->woeidSample = '753692'; // Woeid Barcelona
    }
    /** @test */
    public function it_should_return_text_word_forecast_in_response()
    {
        $this->assertContains('Forecast',
            $this->library->getWeatherFromWoeid($this->woeidSample)
        );
    }
}
