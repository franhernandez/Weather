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
        $this->assertTrue((new WeatherLibrary())->connect());
    }
}
 