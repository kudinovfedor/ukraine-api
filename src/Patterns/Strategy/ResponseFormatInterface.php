<?php

namespace KudinovFedor\AdmTools\Patterns\Strategy;

/**
 * Interface ResponseFormatInterface
 * @package KudinovFedor\AdmTools\Patterns\Strategy
 */
interface ResponseFormatInterface
{
    /**
     * @param \Psr\Http\Message\MessageInterface $response
     * @return mixed|\SimpleXMLElement
     */
    public function parse($response);
}
