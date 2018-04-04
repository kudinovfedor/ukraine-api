<?php

namespace KudinovFedor\AdmTools\Patterns\Strategy;

/**
 * Class ResponseFormat
 * @package KudinovFedor\AdmTools\Patterns\Strategy
 */
class ResponseFormat
{
    /**
     * @var string
     */
    public $format;

    /**
     * ResponseFormat constructor.
     * @param string $format
     */
    public function __construct(string $format)
    {
        $this->format = strtolower($format);
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }


    /**
     * @param $response \Psr\Http\Message\MessageInterface
     * @return mixed|\SimpleXMLElement
     * @throws \Exception
     */
    public function parseResponse($response)
    {
        $response_format = null;

        if ($this->format === 'json') {

            $response_format = new ResponseJSONFormat();

        } elseif ($this->format === 'xml') {

            $response_format = new ResponseXMLFormat();

        } else {
            throw new \Exception('Invalid format specified (supported JSON and XML)');
        }

        return $response_format->parse($response);
    }


}
