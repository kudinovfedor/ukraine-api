<?php

namespace KudinovFedor\AdmTools\Patterns\Strategy;

/**
 * Class ResponseJSONFormat
 * @package KudinovFedor\AdmTools\Patterns\Strategy
 */
class ResponseJSONFormat implements ResponseFormatInterface
{
    /**
     * @param \Psr\Http\Message\MessageInterface $response
     * @return mixed
     */
    public function parse($response)
    {
        return json_decode($response->getBody(), true);
    }
}
