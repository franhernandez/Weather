<?php

namespace Tests;

use Weather\WeatherLibrary;

class WeatherLibraryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function prueba()
    {
        $weatherLibrary = new WeatherLibrary();
        $this->assertTrue($weatherLibrary->connect());
    }
}
 