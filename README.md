[![Build Status](https://travis-ci.org/franhernandez/Weather.svg?branch=master)](https://travis-ci.org/franhernandez/Weather)
Weather
=======
PHP Library Weather (Yahoo Api), using HTTP Client Guzzle.

=======
References
Guzzle: http://guzzle.readthedocs.org/en/latest/http-client/client.html#creating-a-client
Yahoo Api Weather: https://developer.yahoo.com/weather/

=======
Use sample
$library = new WeatherLibrary();
$library->getWeatherFromWoeid($woeid);

