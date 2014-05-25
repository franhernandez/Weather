<?php
/**
 * http://guzzle.readthedocs.org/en/latest/http-client/client.html#creating-a-client
 */
namespace Weather;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\RequestException;

class WeatherLibrary
{
    private $httpClient;

    CONST API_WEBSERVICE_URI = "http://weather.yahooapis.com";

    public function __construct()
    {
        $this->httpClient = new Client(self::API_WEBSERVICE_URI);
    }

    public function getWeatherFromWoeid($woeid)
    {
        $request = $this->httpClient->get("forecastrss?w=$woeid");
        try {
            return (string)$request->send()->xml()->channel->item->description;
        } catch (RequestException $e) {
            return $this->fillException($e);
        }
    }

    private function fillException($e)
    {
        $weatherDescription = $e->getRequest() . "\n";
        if ($e->hasResponse()) {
            $weatherDescription .= $e->getResponse() . "\n";
        }

        return $weatherDescription;
    }
}
