<?php

namespace Weather;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\RequestException;

class WeatherLibrary
{
    private $client;

    CONST API_WEBSERVICE_URI = "http://weather.yahooapis.com";

    public function __construct()
    {
        $this->client = new Client(self::API_WEBSERVICE_URI);
    }

    public function getWeatherFromWoeid($woeid)
    {
        $request = $this->client->get("forecastrss?w=$woeid");
        try {
            $response = $request->send();
        } catch (RequestException $e) {
            return $this->fillException($e);
        }
        return $this->parseResponse($response);
    }

    private function parseResponse($response)
    {
        return (string)$response->xml()->channel->item->description;
    }

    private function fillException($e)
    {
        $message = $e->getRequest() . "\n";
        if ($e->hasResponse()) {
            $message .= $e->getResponse() . "\n";
        }
        return $message;
    }
}
