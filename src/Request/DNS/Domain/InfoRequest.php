<?php

namespace KudinovFedor\AdmTools\Request\DNS\Domain;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Domain
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'dns_domain';

    protected $method = 'info';
}
