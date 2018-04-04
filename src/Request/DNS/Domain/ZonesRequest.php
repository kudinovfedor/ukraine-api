<?php

namespace KudinovFedor\AdmTools\Request\DNS\Domain;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ZonesRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Domain
 */
class ZonesRequest extends AbstractRequest
{
    protected $class = 'dns_domain';

    protected $method = 'zones';
}
