<?php

namespace KudinovFedor\AdmTools\Patterns\Strategy;

/**
 * Class ResponseXMLFormat
 * @package KudinovFedor\AdmTools\Patterns\Strategy
 */
class ResponseXMLFormat implements ResponseFormatInterface
{
    /**
     * @param \Psr\Http\Message\MessageInterface $response
     * @return mixed|\SimpleXMLElement
     */
    public function parse($response)
    {
        return new \SimpleXMLElement($response->getBody()->getContents());
    }
}
