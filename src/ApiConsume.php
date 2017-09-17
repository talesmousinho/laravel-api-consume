<?php

namespace talesmousinho\LaravelApiConsume;

use GuzzleHttp\Client;

class ApiConsume extends Client
{
    /**
     * Used to load the Api Endpoints registered in the configuration file.
     * 
     * @var array
     */
    private $endpoints;

    /**
     * ApiConsume constructor.
     */
    public function __construct()
    {
        parent::__construct(config('apiconsume.defaults'));
        $this->endpoints = config('apiconsume.endpoints');
    }

    public function request($method, $uri = null, array $options = [])
    {
        if (config('apiconsume.merge')) {
            $options = array_replace_recursive(config('apiconsume.merge', []), $options);
        }

        // overwrite from endpoints
        if (isset($this->endpoints[$uri])) {
            $key = $uri;
            $uri = $this->endpoints[$key]['uri'];
            if (isset($this->endpoints[$key]['options']) && is_array($this->endpoints[$key]['options'])) {
                $options = array_replace_recursive($this->endpoints[$key]['options'], $options);
            }
        }

        $response = parent::request($method, $uri, $options);

        if ($response->hasHeader('Content-Type')) {
            $contentType = $response->getHeader('Content-Type')[0];
            if (str_contains($contentType, '/json')) {
                return json_decode($response->getBody());
            }
        }

        return $response;
    }
}
