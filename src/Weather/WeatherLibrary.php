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
            $response = $request->send();
            return $this->parseResponse($response);
        } catch (RequestException $e) {
            return $this->fillException($e);
        }
    }

    private function parseResponse($response)
    {
        return (string)$response->xml()->channel->item->description;
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
