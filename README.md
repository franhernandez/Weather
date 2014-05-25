[![Build Status](https://travis-ci.org/franhernandez/Weather.svg?branch=master)](https://travis-ci.org/franhernandez/Weather)
Weather
=======
PHP Library Weather (Yahoo Api), using HTTP Client Guzzle.<br/>
Guzzle: http://guzzle.readthedocs.org/en/latest/http-client/client.html#creating-a-client<br/>
Yahoo Api Weather: https://developer.yahoo.com/weather/

Here's an example:

```
$woeid = '753692'; //From Barcelona City
$library = new WeatherLibrary();
$library->getWeatherFromWoeid($woeid);
```

Response:

```
<img src="http://l.yimg.com/a/i/us/we/52/28.gif"/><br />
<b>Current Conditions:</b><br />
Mostly Cloudy, 68 F<BR />
<BR /><b>Forecast:</b><BR />
Sun - Mostly Clear. High: 68 Low: 60<br />
Mon - Thunderstorms. High: 67 Low: 58<br />
Tue - Partly Cloudy. High: 69 Low: 59<br />
Wed - Showers. High: 66 Low: 58<br />
Thu - Mostly Sunny. High: 68 Low: 60<br />
<br />
<a href="http://us.rd.yahoo.com/dailynews/rss/weather/Barcelona__ES/*http://weather.yahoo.com/forecast/SPXX0015_f.html">Full Forecast at Yahoo! Weather</a><BR/><BR/>
(provided by <a href="http://www.weather.com" >The Weather Channel</a>)<br/>
```
<img src="http://l.yimg.com/a/i/us/we/52/28.gif"/><br />
<b>Current Conditions:</b><br />
Mostly Cloudy, 68 F<BR />
<BR /><b>Forecast:</b><BR />
Sun - Mostly Clear. High: 68 Low: 60<br />
Mon - Thunderstorms. High: 67 Low: 58<br />
Tue - Partly Cloudy. High: 69 Low: 59<br />
Wed - Showers. High: 66 Low: 58<br />
Thu - Mostly Sunny. High: 68 Low: 60<br />
<br />
<a href="http://us.rd.yahoo.com/dailynews/rss/weather/Barcelona__ES/*http://weather.yahoo.com/forecast/SPXX0015_f.html">Full Forecast at Yahoo! Weather</a><BR/><BR/>
(provided by <a href="http://www.weather.com" >The Weather Channel</a>)<br/>


